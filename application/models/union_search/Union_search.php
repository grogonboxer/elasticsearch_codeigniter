<?php
class Union_search extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->model('search/Search_m','Search_m');
	}

	public function union_search($data){
		while(isset($data['union_table'])){
			if(count($data['union_table']) > 0){
				foreach ($data['union_table'] as $key => $union_table) {
					$union_search_result = $this->union_search($union_table);
					//子查询出错,直接返回
					if($union_search_result['error']){
						return $union_search_result;
					}
					$items = array_values($union_search_result['items']);
					
					$temp = ["fields" => $key,"query" => $items,"mode" => $union_table['union_mode']];
					$data["conditions"][] = $temp;
					unset($data['union_table'][$key]);
				}
			}else{
				unset($data['union_table']);
			}
		}
		$search_result = $this->Search_m->search($data['table'],$data['conditions'],$data['tablefield']);
		if($search_result['error']){
			return $search_result;
		}
		return $search_result;
	}
}