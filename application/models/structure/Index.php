<?php
use Elasticsearch\ClientBuilder;
class Index extends CI_Model{
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
	//创建index
	public function create_index($tablename){
		$params = [
			'index' => self::$search_config['index_prefix'].$tablename,
			'body' => [
				'settings' => self::$search_config['settings']
			]
		];
		$response = self::$client->indices()->create($params);
		return $response;
	}
	//获取存在的索引
	public function get_index($tablename){
		$params = [
		    'index' => self::$search_config['index_prefix'].$tablename
		];
		$response = self::$client->indices()->get($params);
		return $response;
	}
	//查询当前索引是否存在
	public function exist_index($tablename){
		$params = [
		    'index' => self::$search_config['index_prefix'].$tablename
		];
		$response = self::$client->indices()->exists($params);
		return $response;
	}
	//删除index
	public function delete_index($tablename){
		$params = [
		    'index' => self::$search_config['index_prefix'].$tablename
		];
		$response = self::$client->indices()->delete($params);
		return $response;
	}
}