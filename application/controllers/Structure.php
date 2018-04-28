<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/libraries/REST_Controller.php';

class Structure extends REST_Controller {
	public static $directory = 'application/config/es/';
	public static $tables = [];

	public function __construct(){
		parent::__construct();
		$this->load->model('structure/Index');
		$this->load->model('structure/Type');
		$this->load->library('Tablelist');
		self::$tables = $this->tablelist->tablelist();
	}
	//添加索引结构
	public function all_post(){
		set_time_limit(0);
		foreach (self::$tables as $table) {
			$index_result = $this->Index->exist_index($table);
			//涉及到已有数据问题,已经存在的索引,不应再重新创建,如果出现结构变化,需要删除现有索引结构,再做新增
			if(!$index_result){
				$ic_result = $this->Index->create_index($table);
				if($ic_result['acknowledged'] == 1){
					$result[$table][] =  "创建index成功:".$table;
					$tc_result = $this->Type->create_type($table);
					if($tc_result){
						$result[$table][] =  "创建type成功:".$table;
					}else{
						$result[$table][] =  "创建type失败:".$table;
					}
				}else{
					$result[$table][] = "创建index失败:".$table;		
				}
			}
		}
		$result[] = '创建索引结构完成,done!';

		$this->response($result);
	}
	//查看索引结构
	public function all_get(){
		foreach (self::$tables as $table) {
			$result[$table][] = $this->Index->get_index($table);
		}
		
		$this->response($result);
	}
	//删除所有表的索引
	public function all_delete(){
		foreach (self::$tables as $table) {
			$index_result = $this->Index->exist_index($table);
			if($index_result){
				$index_result = $this->Index->delete_index($table);
				if($index_result){
					$result[$table][] = 'index '.$table.' delete success';
				}else{
					$result[$table][] = 'index '.$table.' delete fail';
				}
			}else{
				$result[$table][] = 'index '.$table.' no exists';
			}
		}
		$result[] = '删除索引结构完成,done!';
		$this->response($result);
	}
}