<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/libraries/REST_Controller.php';

class Search extends REST_Controller {
	public static $tables = [];

	public function __construct(){
		parent::__construct();
		//('Es_search');
		$this->load->model('search/Search_m','Search_m');
		$this->load->model('union_search/Union_search','un_search');
		$this->load->library('Tablelist');
		self::$tables = $this->tablelist->tablelist();
	}
	//超级简单单表搜索
	public function super_simple_search_post(){
		$posts = $this->post();
		$data = $posts['data'];
		$data_array = json_decode($data,TRUE);

		//必填参数table
		if(isset($data_array['table'])){
			$table = $data_array['table'];
		}else{
			$this->response(["参数table传递错误"]);
		}

		if(in_array($table,self::$tables)){
			$this->load->config('es/'.$table,TRUE);
			$table_config = $this->config->item('es/'.$table);
			foreach ($table_config['mapping']['properties'] as $key => $property) {
				if(in_array($property['type'],['text','keyword']) && !(isset($property['index']) && $property['index'] == 'no')){
					$en_filter_fields[] = $key;
				}
			}
			//必填参数simple_search
			if(isset($data_array['simple_search'])){
				if(trim($data_array['simple_search']) == ''){
					$conditions = [
						["mode"=>"matchall"]
					];
				}else{
					$conditions = [
						['fields'=>$en_filter_fields ,"query"=>$data_array['simple_search'],"mode"=>"multimatch"]
					];
				}
			}
			else{
				$this->response(["参数simple_search传递错误"]);
			}
			$tablefield = 'all';

			$s_result = $this->Search_m->search($table,$conditions,$tablefield);
			if($s_result['error']){
				$result = $s_result['items'];
			}else{
				$result['items'] = $s_result['items'];
				if(isset($data_array['filter_fields'])){
					$result['items'] = $this->filter($result['items'],$data_array['filter_fields']);
				}
				$result['count'] = $s_result['count'];
			}
		}else{
			$result[] = $table.' 不在维护列表';
		}

		$this->response($result);
	}
	//单表搜索
	public function search_post(){
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
		$tablefield = isset($data_array['tablefield'])?$data_array['tablefield']:'all';

		
		if(in_array($table,self::$tables)){
			$s_result = $this->Search_m->search($table,$conditions,$tablefield);
			if($s_result['error']){
				$result = $s_result['items'];
			}else{
				$result['items'] = $s_result['items'];
				if(isset($data_array['filter_fields'])){
					$result['items'] = $this->filter($result['items'],$data_array['filter_fields']);
				}
				$result['count'] = $s_result['count'];
			}
		}else{
			$result[] = $table.' 不在维护列表';
		}

		$this->response($result);
	}
	//连表搜索
	public function search_union_post(){
		$posts = $this->post();
		$data = $posts['data'];
		$data_array = json_decode($data,TRUE);
		$result = $this->un_search->union_search($data_array);
		if($result){
			if(isset($data_array['filter_fields'])){
					$result['items'] = $this->filter($result['items'],$data_array['filter_fields']);
				}
			$this->response($result);
		}else{
			$this->response(['查询出错']);
		}
	}

	private function filter($arrays,$keys){
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