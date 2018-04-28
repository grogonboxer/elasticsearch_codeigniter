<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/libraries/REST_Controller.php';

class Data extends REST_Controller {
	public static $tables = [];

	public function __construct(){
		parent::__construct();
		$this->load->model('data/Inform');
		$this->load->model('data/Maintain');
		$this->load->library('Tablelist');
		self::$tables = $this->tablelist->tablelist();
	}
	//刷索引数据
	public function data_post($table){
		ini_set('memory_limit', '2048M');
		set_time_limit(0);
		if($table == 'all'){
			$post_tables = self::$tables;
		}elseif(in_array($table,self::$tables)){
			$post_tables = [$table];
		}else{
			$result[] = $table.' 不在维护列表';
			$this->response($result);
		}

		foreach ($post_tables as $table) {
			$batch_result = $this->Inform->set_inform_batch($table);
			if($batch_result['res']){
				$result[$table][] = $table." data batch...success";
			}else{
				$result[$table][] = $table." data batch...fail";
			}
		}
		$result[] = 'data batch...done!';

		$this->response($result);
	}
	//按照id获取索引
	public function data_get($table,$id){
		if(in_array($table,self::$tables)){
			$result = ['items' => [],'count' => 0];
			$g_result = $this->Inform->get_data($table,$id);
			if($g_result['found']){
				$result = ['items' => $g_result['_source'],'count' => 1];
			}
		}else{
			$result[] = $table.' 不在维护列表';
		}

		$this->response($result);
	}

	public function service_post($table,$id){
		if(!in_array($table,self::$tables)){
			$result[] = $table.' 不在维护列表';
		}else{
			//db存在数据
			$db_data = $this->Maintain->get_db_data($table,$id);
			if(is_array($db_data) && count($db_data) > 0){
				$db_data_exists = TRUE;
				$data = $db_data[0];
			}else{
				$db_data_exists = FALSE;
			}
			//索引存在数据
			$es_data = $this->Inform->get_data($table,$id);
			if($es_data['found']){
				$es_data_exists = TRUE;
			}else{
				$es_data_exists = FALSE;
			}

			//添加
			if($db_data_exists && !$es_data_exists){
				$this->Maintain->insert_data($table,$id,$data);
				//同步
				$result[] = '该条数据添加同步完成';
			}
			//更新
			if($db_data_exists && $es_data_exists){
				$this->Maintain->update_data($table,$id,$data);
				//同步
				$result[] = '该条数据更新同步完成';
			}
			//删除
			if(!$db_data_exists && $es_data_exists){
				$this->Maintain->delete_data($table,$id);
				//同步
				$result[] = '该条数据删除同步完成';
			}
			//不做处理
			if(!$db_data_exists && !$es_data_exists){
				//同步
				$result[] = '该条数据同步完成';
			//	$this->Maintain->delete_data($table,$id);
			}

			//同步
			$result[] = '该条数据同步完成';
		}

		$this->response($result);
	}
}