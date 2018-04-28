<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//用户管理
$config = [
	'id' => 'u_id',
	'mapping' => [
		'_source' => [
			'enabled' => true
		],
		'_all' => [
			'index' => 'analyzed',
			'analyzer' => 'ik_max_word'
		],
		'properties' => [
			'u_id' => [
				'type' => 'long'
			],
			'username' => [
				'type' => 'text'
			],
			'password' => [
				'type' => 'keyword',
				'index' => 'no',
				'include_in_all' => 'false'
			],
			'salt' => [
				'type' => 'keyword',
				'index' => 'no',
				'include_in_all' => 'false'
			],
			'u_mobile' => [
				'type' => 'keyword'
			],
			'u_email' => [
				'type' => 'keyword'
			],
			'user_type_poi_user_types' => [
				'type' => 'long'
			],
			'rdl_poi_render_level' => [
				'type' => 'long'
			],
			'info_poi_user_info' => [
				'type' => 'long'
			],
			'role_id_poi_role' => [
				'type' => 'long'
			],
			'is_verify' => [
				'type' => 'long'
			],
			'mobile_verified' => [
				'type' => 'long'
			],
			'email_verfied' => [
				'type' => 'long'
			],
			'verify_poi_user_verify' => [
				'type' => 'long'
			],
			'u_regist_date' => [
				'type' => 'long'
			],
			'rdl_id' => [
				'type' => 'long'
			],
			'ut_id' => [
				'type' => 'long'
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