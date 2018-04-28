<?php
use Elasticsearch\ClientBuilder;
class Inform extends CI_Model{
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

	public function set_inform_batch($tablename){
		$this->load->config('es/'.$tablename,TRUE);
		$table_config = $this->config->item('es/'.$tablename);
		$this->db->select('*,'.$table_config['id'].' as _id');
		$result = $this->db->get($tablename)->result_array();

		$params = ['body'=>[]];
		foreach ($result as $key => $value) {
			$params['body'][] = [
				'index' => [
					'_index' => self::$search_config['index_prefix'].$tablename,
					'_type' => $tablename,
					'_id' => $value['_id']
				]
			];
			unset($value['_id']);
			$params['body'][] = $value;

			if( ($key + 1)%1000 == 0 ){
				$responses = self::$client->bulk($params);
				if($responses['errors']){
					return ['res' => FALSE,'table' => 'tablename','errors' => $responses['errors']];
				}
				$params = ['body'=>[]];
				unset($responses);
			}
		}
		if(!empty($params['body'])){
			$responses = self::$client->bulk($params);
			if($responses['errors']){
				return ['res' => FALSE,'table' => 'tablename','errors' => $responses['errors']];
			}
		}
		return ['res' => TRUE,'table' => 'tablename','errors' => $responses['errors']];
	}

	public function get_data($tablename,$id){
		$responses = [];
		$params = [
			'index' => self::$search_config['index_prefix'].$tablename,
			'type' => $tablename,
			'id' => $id
		];
		try{
			$responses = self::$client->get($params);
		}catch(Exception $e){
			$message = $e->getMessage();
			$responses = json_decode($message,TRUE);
		}
		return $responses;
	}
}
