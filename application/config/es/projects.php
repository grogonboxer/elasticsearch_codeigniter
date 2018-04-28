<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//项目
$config = [
	'id' => 'id',
	'mapping' => [
		'_source' => [
			'enabled' => true
		],
		'_all' => [
			'index' => 'analyzed',
			'analyzer' => 'ik_max_word'
		],
		//demo:为了简化配置,当没有填写index属性的时候,按照type做mapping属性的补齐
		//demo: properties.$key.type 类型对应:int不分词=>long,varchar不分词=>keyword,varchar分词=>text,decimal不分词=>double
		//如果需要做特殊配置,需要在下边做单独的index配置
		'properties' => [
			'id' => [
				'type' => 'long'
			],
			'number' => [
				'type' => 'text'
			],
			'name' => [
				'type' => 'text'
			],
			'category' => [
				'type' => 'text'
			],
			'validity' => [
				'type' => 'keyword'
			],
			'remark' => [
				'type' => 'text'
			],
			'invitation_time' => [
				'type' => 'long'
			],
			'delivery_time' => [
				'type' => 'long'
			],
			'risk_analysis' => [
				'type' => 'text'
			],
			'first_party_name' => [
				'type' => 'text'
			],
			'feasibility' => [
				'type' => 'long'
			],
			'sketch' => [
				'type' => 'text'
			],
			'intro' => [
				'type' => 'text'
			],
			'amount' => [
				'type' => 'double'
			],
			'percent' => [
				'type' => 'long'
			],
			'second_party_competitor' => [
				'type' => 'text'
			],
			'competitor' => [
				'type' => 'text'
			],
			'competitor_strengths' => [
				'type' => 'text'
			],
			'competitor_projections' => [
				'type' => 'text'
			],
			'user_poi_users' => [
				'type' => 'long'
			],
			'seller_poi_sell_users' => [
				'type' => 'long'
			],
			'com_id_poi_companys' => [
				'type' => 'long'
			],
			'dealer_id_poi_company_dealer' => [
				'type' => 'long'
			],
			'st_id_poi_company_stores' => [
				'type' => 'long'
			],
			'state' => [
				'type' => 'keyword'
			],
			'create_time' => [
				'type' => 'long'
			],
			'update_time' => [
				'type' => 'long'
			],
			'mask_delete' => [
				'type' => 'long'
			]
		]
	]
];