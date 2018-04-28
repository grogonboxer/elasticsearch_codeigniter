<?php
use Elasticsearch\ClientBuilder;
use ONGR\ElasticsearchDSL;

class Search_id extends CI_Model{
	public static $search_config = '';
	public static $hosts = '';
	public static $client = '';
	public static $range_key = ['lt','gt','lte','gte'];

	public function __construct(){
		parent::__construct();
		
		$this->load->config('search',TRUE);
		self::$search_config = $this->config->item('search');
		self::$hosts[] = self::$search_config['host'].':'.self::$search_config['post'];
		self::$client = ClientBuilder::create()
						->setHosts(self::$hosts)
						->build();
	}

	public function search($tablename,$conditions,$from,$size){
		$index = self::$search_config['index_prefix'].$tablename;
		$type = $tablename;
		if(count($conditions)){
			$config_fileds = $this->_get_config_fields($tablename);
			$search_body = $this->_get_search_query($conditions,$config_fileds);
		}else{
			$search_body = $this->_get_all_search();
		}
		try{
			$params = [
				'index' => $index,
				'type' => $type,
				'from' => $from,
				'size' => $size,
				'body' => $search_body
			];
			$responses = self::$client->search($params);

			$ids = $this->_get_id($responses);
			$count = $responses['hits']['total'];
			$error = FALSE;
			$msg = '';
		}catch(Exception $e){
			$message = $e->getMessage();
			$responses = json_decode($message,TRUE);

			$ids = [];
			$count = 0;
			$error = TRUE;
			$msg = $responses;
		}
		return ['ids'=>$ids,'count'=>$count,'error'=>$error,'msg'=>$msg];
	}

	private function _get_config_fields($tablename){
		$this->load->config('es/'.$tablename,TRUE);
		$table_config = $this->config->item('es/'.$tablename);
		$config_fields = array_keys($table_config['mapping']['properties']);
		return $config_fields;
	}

	private function _get_search_query($conditions,$config_fileds){
		$search = new ONGR\ElasticsearchDSL\Search();
		$boolQuery = new ONGR\ElasticsearchDSL\Query\Compound\BoolQuery();

		foreach ($conditions as $key => $condition) {
			if(is_string($condition['fields']) && !in_array($condition['fields'],$config_fileds)){
				continue;
			}
			if(is_array($condition) && isset($condition['mode'])){
				switch ($condition['mode']) {
					case 'and':
						$geoQuery[$key] = new ONGR\ElasticsearchDSL\Query\TermLevel\TermQuery($condition['fields'], $condition['query']);
						$boolQuery->add($geoQuery[$key],'must');
						break;
					case 'not_and':
						$geoQuery[$key] = new ONGR\ElasticsearchDSL\Query\TermLevel\TermQuery($condition['fields'], $condition['query']);
						$boolQuery->add($geoQuery[$key],'must_not');
						break;
					case 'or':
						$geoQuery[$key] = new ONGR\ElasticsearchDSL\Query\TermLevel\TermQuery($condition['fields'], $condition['query']);
						$boolQuery->add($geoQuery[$key],'should');
						break;
					case 'in':
						if(is_array($condition['query'])){
							$geoQuery[$key] = new ONGR\ElasticsearchDSL\Query\TermLevel\TermsQuery($condition['fields'], $condition['query']);
							$boolQuery->add($geoQuery[$key],'must');
						}
						break;
					case 'not_in':
						$geoQuery[$key] = new ONGR\ElasticsearchDSL\Query\TermLevel\TermsQuery($condition['fields'], $condition['query']);
						$boolQuery->add($geoQuery[$key],'must_not');
						break;
					case 'or_in':
						$geoQuery[$key] = new ONGR\ElasticsearchDSL\Query\TermLevel\TermsQuery($condition['fields'], $condition['query']);
						$boolQuery->add($geoQuery[$key],'should');
						break;
					case 'wildcard':
						$geoQuery[$key] = new ONGR\ElasticsearchDSL\Query\TermLevel\WildcardQuery($condition['fields'], $condition['query']);
						$boolQuery->add($geoQuery[$key],'must');
						break;
					case 'range':
						if(is_array($condition['query'])){
							foreach ($condition['query'] as $key => $value) {
								if(!in_array($key,self::$range_key)){
									unset($condition['query'][$key]);
								}
							}
						}
						if(count($condition['query']) > 0){
							$geoQuery[$key] = new ONGR\ElasticsearchDSL\Query\TermLevel\RangeQuery($condition['fields'], $condition['query']);
							$boolQuery->add($geoQuery[$key],'must');
						}
						break;
					case 'match':
						$geoQuery[$key] = new ONGR\ElasticsearchDSL\Query\FullText\MatchQuery($condition['fields'], $condition['query']);
						$boolQuery->add($geoQuery[$key],'must');
						break;
					case 'multimatch':
						if(is_array($condition['fields'])){
							$geoQuery[$key] = new ONGR\ElasticsearchDSL\Query\FullText\MultiMatchQuery($condition['fields'], $condition['query']);
							$boolQuery->add($geoQuery[$key],'must');
						}
						break;
					case 'matchall':
						$geoQuery[$key] = new ONGR\ElasticsearchDSL\Query\MatchAllQuery();
						$boolQuery->add($geoQuery[$key],'must');
						break;
					default:
						$geoQuery[$key] = new ONGR\ElasticsearchDSL\Query\MatchAllQuery();
						$boolQuery->add($geoQuery[$key],'must');
						break;
				}
			}
		}
		$geoQuery_mask = new ONGR\ElasticsearchDSL\Query\TermLevel\TermQuery('mask_delete', 0);
		$boolQuery->add($geoQuery_mask,'must');
		$search->addQuery($boolQuery);

		return $search->toArray();
	}

	private function _get_all_search(){
		$search = new ONGR\ElasticsearchDSL\Search();
		$boolQuery = new ONGR\ElasticsearchDSL\Query\Compound\BoolQuery();
		$geoQuery_mask = new ONGR\ElasticsearchDSL\Query\TermLevel\TermQuery('mask_delete', 0);
		$boolQuery->add($geoQuery_mask,'must');
		$search->addQuery($boolQuery);

		return $search->toArray();
	}

	private function _get_id($responses){
		$ids = [];
		$count = $responses['hits']['total'];
		if($count > 0){
			foreach ($responses['hits']['hits'] as $hit) {
				$ids[] = $hit['_id'];
			}
		}
		return $ids;
	}
}