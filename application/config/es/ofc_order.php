<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//订单
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
			'quote_poi_quote' => [
				'type' => 'long'
			],
			'c2m_quote_poi_quote' => [
				'type' => 'keyword',
				'index' => 'no',
				'include_in_all' => 'false'
			],
			'title' => [
				'type' => 'text'
			],
			'cus_com_poi_ofc_cus_companys' => [
				'type' => 'long'
			],
			'company_name' => [
				'type' => 'text'
			],
			'receipt' => [
				'type' => 'text'
			],
			'receipt_remark' => [
				'type' => 'text'
			],
			'postcode' => [
				'type' => 'keyword'
			],
			'tel' => [
				'type' => 'keyword'
			],
			'address' => [
				'type' => 'text'
			],
			'remark' => [
				'type' => 'text'
			],
			'seller_poi_users' => [
				'type' => 'long'
			],
			'st_id_poi_company_stores' => [
				'type' => 'long'
			],
			'com_id_poi_companys' => [
				'type' => 'long'
			],
			'total_price' => [
				'type' => 'double'
			],
			'favour_price' => [
				'type' => 'double'
			],
			'discount_price' => [
				'type' => 'double'
			],
			'paid' => [
				'type' => 'double'
			],
			'cost' => [
				'type' => 'double'
			],
			'split_order' => [
				'type' => 'long'
			],
			'effect_time' => [
				'type' => 'long'
			],
			'order_state' => [
				'type' => 'keyword'
			],
			'code' => [
				'type' => 'keyword'
			],
			'has_bill' => [
				'type' => 'keyword'
			],
			'cycle_time' => [
				'type' => 'long'
			],
			'delivery_time' => [
				'type' => 'long'
			],
			'paymode' => [
				'type' => 'keyword'
			],
			'payment' => [
				'type' => 'keyword'
			],
			'buyer' => [
				'type' => 'text'
			],
			'seller' => [
				'type' => 'text'
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