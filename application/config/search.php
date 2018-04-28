<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = [
	'host' => '192.168.1.107',
	'post' => '9200',
	'index_prefix' => 'dpjia_local_',
	'settings' => [
		'number_of_shards' => 5,
		'number_of_replicas' => 1
	],
	'analyzer' => 'ik_max_word'
];