<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
		// '_parent' => [
		// 	'type' => 'ofc_order'
		// ],
		'properties' => [
			'id' => [
				'type' => 'long'
			],
			'order_poi_ofc_order' => [
				'type' => 'long'
			],
			'fur_id_poi_furnitures' => [
				'type' => 'long'
			],
			'sku_poi_furniture_sku' => [
				'type' => 'long'
			],
			'num' => [
				'type' => 'long'
			],
			'sended_num' => [
				'type' => 'long'
			],
			'price' => [
				'type' => 'double'
			],
			'actualprice' => [
				'type' => 'double'
			],
			'subtotal' => [
				'type' => 'double'
			],
			'remark' => [
				'type' => 'text'
			],
			'project' => [
				'type' => 'text'
			],
			'fur_name' => [
				'type' => 'text'
			],
			'code' => [
				'type' => 'text'
			],
			'sizes' => [
				'type' => 'text'
			],
			'color' => [
				'type' => 'text'
			],
			'thumbnail_url' => [
				'type' => 'keyword'
			],
			'version' => [
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