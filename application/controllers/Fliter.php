<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/libraries/REST_Controller.php';

class Fliter extends REST_Controller {
	public static $tables = [];

	public function __construct(){
		parent::__construct();
		//('Es_search');
		$this->load->model('search/Search_id','Search_id');
		$this->load->model('search/Search_sub','Search_sub');
		$this->load->library('Tablelist');
		self::$tables = $this->tablelist->tablelist();
	}

	//单表搜索
	public function ids_post(){
		$posts = $this->post();
		$data = $posts['data'];
		$data_array = json_decode($data,TRUE);

		//必填参数table
		if(isset($data_array['table'])){
			$table = $data_array['table'];
		}else{
			$this->response(["参数table_name传递错误"]);
		}
		//必填参数data
		if(isset($data_array['conditions'])){
			$conditions = $data_array['conditions'];
		}else{
			$this->response(["参数data传递错误"]);
		}
		//选填参数skip limit
		$skip = isset($data_array['skip'])?$data_array['skip']:0;
		$limit = isset($data_array['limit'])?$data_array['limit']:10;
		//选填参数 sub_conditions
		$sub_conditions = [];
		if(isset($data_array['sub_conditions'])){
			$sub_conditions = $this->_get_sub_conditions($data_array['sub_conditions']);
		}
		$conditions = array_merge($conditions,$sub_conditions);
		
		if(in_array($table,self::$tables)){
			$s_result = $this->Search_id->search($table,$conditions,$skip,$limit);

			unset($s_result['error']);
			unset($s_result['msg']);
			$result = $s_result;
		}else{
			$result[] = $table.' 不在维护列表';
		}

		$this->response($result);
	}

	private function _get_sub_conditions($sub_conditions){
		$return_arr = [];
		foreach ($sub_conditions as $key => $sub_condition) {
			while (isset($sub_condition['sub_conditions'])) {
				$mu_condition = $this->_get_sub_conditions($sub_condition['sub_conditions']);
				$sub_condition['conditions'] = array_merge($sub_condition['conditions'],$mu_condition);
			}
			$return_arr[] = $this->Search_sub->search_sub($sub_condition['table'],$sub_condition['conditions'],$sub_condition['field'],$key,$sub_condition['pare_mode']);
		}
		return $return_arr;
	}


	//连表搜索
	public function ids_union_post(){
		$posts = $this->post();
		$data = $posts['data'];
		$data_array = json_decode($data,TRUE);
		$result = $this->un_search->union_search($data_array);
		if($result){
			if(isset($data_array['filter_fields'])){
					$result['items'] = $this->_filter($result['items'],$data_array['filter_fields']);
				}
			$this->response($result);
		}else{
			$this->response(['查询出错']);
		}
	}

	private function _filter($arrays,$keys){
		$keys_array = explode(',', $keys);
		$new_array = [];
		foreach ($arrays as $array) {
			foreach ($keys_array as $key) {
				if(isset($array[$key])){
					$temp[$key] = $array[$key];
				}
			}
			$new_array[] = $temp;
		}
		return $new_array;
	}
}