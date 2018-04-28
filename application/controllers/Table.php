<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/libraries/REST_Controller.php';

class Table extends REST_Controller {
	public static $directory = 'application/config/es/';
	public static $tables = [];

	public function __construct(){
		parent::__construct();
		$this->load->model('structure/Index');
		$this->load->model('structure/Type');
		$this->load->library('Tablelist');
		self::$tables = $this->tablelist->tablelist();
	}

	//添加单表索引
	public function single_post($table){
		if(in_array($table,self::$tables)){
			$index_result = $this->Index->exist_index($table);
			//针对单表操作的创建问题,不会涉及到过多的数据,当现在存在该索引的时候,先删除,再重建
			if($index_result){
				$index_result = $this->Index->delete_index($table);
			}
			//创建
			$ic_result = $this->Index->create_index($table);
			if($ic_result['acknowledged'] == 1){
				$result[] =  'index '.$table.' create success';
				$tc_result = $this->Type->create_type($table);
				if($tc_result){
					$result[] = 'mapping '.$table.' create success';
				}else{
					$result[] = 'mapping '.$table.' create fail';
				}
			}else{
				$result[] = 'index '.$table.' create fail';
			}
		}else{
			$result[] = $table.' 不在维护列表';
		}

		$this->response($result);
	}

	//获取单表索引
	public function single_get($table){
		if(in_array($table,self::$tables)){
			$index_result = $this->Index->exist_index($table);
			$result[] = $this->Index->get_index($table);
		}else{
			$result[] = $table.' 不在维护列表';
		}

		$this->response($result);
	}

	//删除单表索引
	public function single_delete($table){
		if(in_array($table,self::$tables)){
			$index_result = $this->Index->exist_index($table);
			if($index_result){
				$index_result = $this->Index->delete_index($table);
				if($index_result){
					$result[] = 'index '.$table.' delete success';
				}else{
					$result[] = 'index '.$table.' delete fail';
				}
			}else{
				$result[] = 'index '.$table.' no exists';
			}
		}else{
			$result[] = $table.' 不在维护列表';
		}

		$this->response($result);
	}
}