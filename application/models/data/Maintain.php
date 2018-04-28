<?php
use Elasticsearch\ClientBuilder;
class Maintain extends CI_Model{
	public static $search_config = '';
	public static $hosts = '';
	public static $client = '';

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('directory');
		$this->load->config('search',TRUE);
		self::$search_config = $this->config->item('search');
		self::$hosts[] = self::$search_config['host'].':'.self::$search_config['post'];
		self::$client = ClientBuilder::create()
						->setHosts(self::$hosts)
						->build();
	}

	public function insert_data($tablename,$id,$data){
		$params = [
			'index' => self::$search_config['index_prefix'].$tablename,
			'type' => $tablename,
			'id' => $id,
			'body' => $data
		];

		$responses = self::$client->index($params);
		if($responses['result'] == 'created' && $responses['_shards']['successful'] > 0){
			return ['res' => TRUE,'table' => 'tablename'];
		}else{
			return ['res' => FALSE,'table' => 'tablename'];
		}
	}
	public function update_data($tablename,$id,$data){
		$params = [
			'index' => self::$search_config['index_prefix'].$tablename,
			'type' => $tablename,
			'id' => $id,
			'body' => [
				'doc' => $data
			]
		];

		$responses = self::$client->update($params);
		if($responses['result'] == 'updated' && $responses['_shards']['successful'] > 0){
			return ['res' => TRUE,'table' => 'tablename'];
		}else{
			return ['res' => FALSE,'table' => 'tablename'];
		}
		
	}
	public function delete_data($tablename,$id){
		$params = [
			'index' => self::$search_config['index_prefix'].$tablename,
			'type' => $tablename,
			'id' => $id,
		];

		$responses = self::$client->delete($params);
		if($responses['result'] == 'deleted' && $responses['_shards']['successful'] > 0){
			return ['res' => TRUE,'table' => 'tablename'];
		}else{
			return ['res' => FALSE,'table' => 'tablename'];
		}
		
	}

	public function get_db_data($tablename,$id){
		$this->load->config('es/'.$tablename,TRUE);
		$table_config = $this->config->item('es/'.$tablename);
		$this->db->where($table_config['id'],$id);
		$result = $this->db->get($tablename)->result_array();

		return $result;
	}
}