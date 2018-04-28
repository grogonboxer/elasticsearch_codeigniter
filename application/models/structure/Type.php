<?php
use Elasticsearch\ClientBuilder;
class Type extends CI_Model{
	public static $search_config = '';
	public static $hosts = '';
	public static $client = '';

	public function __construct(){
		parent::__construct();
		$this->load->config('search',TRUE);
		self::$search_config = $this->config->item('search');
		self::$hosts[] = self::$search_config['host'].':'.self::$search_config['post'];
		self::$client = ClientBuilder::create()
						->setHosts(self::$hosts)
						->build();
	}

	//创建type结构
	public function create_type($tablename){
		$params = [
			'index' => self::$search_config['index_prefix'].$tablename,
			'type' => $tablename,
			'body' => [
				$tablename => $this->get_current_type($tablename)
			]
		];
		$response = self::$client->indices()->putMapping($params);
		return $response;
	}
	//查询当前type
	public function get_type($tablename){
		$params = [
		    'index' => self::$search_config['index_prefix'].$tablename,
		    'type' => $tablename
		];
		$response = self::$client->indices()->getMapping($params);
		return $response;
	}
	//删除type
	public function delete_type($tablename){
		// $params = [
		// 	'index' => self::$index,
		// 	'type' => $tablename
		// ];
		// $response = self::$client->indices()->deleteMapping($params);
		// return $response;
	}

	private function get_current_type($tablename){
		$this->load->config('es/'.$tablename,TRUE);
		$config = $this->config->item('es/'.$tablename);
		$table_body = $config['mapping'];
		unset($table_body['properties']);
		foreach ($config['mapping']['properties'] as $key => $properties) {
			if(!isset($properties['index'])){
				$table_body['properties'][$key]['type'] = $properties['type'];
				if($properties['type'] == 'text'){
					$table_body['properties'][$key]['index'] = 'analyzed';
					$table_body['properties'][$key]['analyzer'] = self::$search_config['analyzer'];
				}else{
					$table_body['properties'][$key]['index'] = 'not_analyzed';
					$table_body['properties'][$key]['include_in_all'] = 'false';
				}
			}else{
				$table_body['properties'][$key] = $properties;
			}
		}
		return $table_body;
	}
}
