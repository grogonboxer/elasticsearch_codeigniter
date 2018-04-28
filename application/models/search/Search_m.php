<?php
use Elasticsearch\ClientBuilder;
use ONGR\ElasticsearchDSL;

class Search_m extends CI_Model{
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

	//tablefield默认为all,当tablefield为具体字段名的时候,把_id的数组赋值给
	public function search($tablename,$conditions,$tablefield = 'all'){
		//数据处理
		$index = self::$search_config['index_prefix'].$tablename;
		$type = $tablename;
		$from = isset($conditions['skip'])?$conditions['skip']:0;
		$size = isset($conditions['limit'])?$conditions['limit']:10;
		unset($conditions['skip']);
		unset($conditions['limit']);
		if(count($conditions)){
			$config_fileds = $this->_get_config_fields($tablename);
			$search_body = $this->_get_search_query($conditions,$config_fileds);
		}else{
			$search_body = $this->_get_all_search();
		}
		//尝试搜索
		try{
			if($tablefield == 'all'){
				$params = [
					'index' => $index,
					'type' => $type,
					'from' => $from,
					'size' => $size,
					'body' => $search_body
				];
				$responses = self::$client->search($params);
				$count = $responses['hits']['total'];
				$hits = $responses['hits']['hits'];
			}else{
				$params = [
					'index' => $index,
					'type' => $type,
					'scroll' => '30s',
					'size' => '50',
					'body' => $search_body
				];
				$responses = self::$client->search($params);
				$count = $responses['hits']['total'];
				$hits = $responses['hits']['hits'];
				while (isset($responses['hits']['hits']) && count($responses['hits']['hits']) > 0){
					$scroll_id = $responses['_scroll_id'];
					$responses = self::$client->scroll([
						"scroll_id" => $scroll_id,
						"scroll" => "30s"
					]);
					$hits = array_merge($hits,$responses['hits']['hits']);
				}
			}

			$return = ['items'=>[],'count'=>$count,'error'=>FALSE];
			if($count > 0){
				$return['items'] = $this->_source_conversion($hits,$tablefield);
			}
		}catch(Exception $e){
			$message = $e->getMessage();
			$responses = json_decode($message,TRUE);
			$return = ['items'=>$responses,'count'=>0,'error'=>TRUE];
		}
		return $return;
	}
	private function _get_all_search(){
		$search = new ONGR\ElasticsearchDSL\Search();
		$boolQuery = new ONGR\ElasticsearchDSL\Query\Compound\BoolQuery();
		$geoQuery_mask = new ONGR\ElasticsearchDSL\Query\TermLevel\TermQuery('mask_delete', 0);
		$boolQuery->add($geoQuery_mask,'must');
		$search->addQuery($boolQuery);

		return $search->toArray();
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

	private function _source_conversion($hits,$tablefield){
		foreach ($hits as $hit) {
			if($tablefield == 'all'){
				$items[] = $hit['_source'];
			}elseif(isset($hit['_source'][$tablefield])){
				$items[] = $hit['_source'][$tablefield];
				$items = array_unique($items);
			}
		}
		return $items;
	}

	private function _get_config_fields($tablename){
		$this->load->config('es/'.$tablename,TRUE);
		$table_config = $this->config->item('es/'.$tablename);
		$config_fields = array_keys($table_config['mapping']['properties']);
		
		return $config_fields;
	}
}