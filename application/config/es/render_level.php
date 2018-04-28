<?php defined('BASEPATH') OR exit('No direct script access allowed');
//渲染管理
$config = array (
  'id' => 'rdl_id',
  'mapping' => 
  array (
    '_source' => 
    array (
      'enabled' => true,
    ),
    '_all' => 
    array (
      'index' => 'analyzed',
      'analyzer' => 'ik_max_word',
    ),
    'properties' => 
    array (
      'rdl_id' => 
      array (
        'type' => 'long',
      ),
      'rdl_name' => 
      array (
        'type' => 'text',
      ),
      'rdl_count_per_day' => 
      array (
        'type' => 'long',
      ),
      'rdl_intro' => 
      array (
        'type' => 'text',
      ),
      'rdl_create_time' => 
      array (
        'type' => 'long',
      ),
      'uid' => 
      array (
        'type' => 'long',
      ),
      'uid_poi_admin' => 
      array (
        'type' => 'long',
      ),
      'create_time' => 
      array (
        'type' => 'long',
      ),
      'update_time' => 
      array (
        'type' => 'long',
      ),
      'mask_delete' => 
      array (
        'type' => 'long',
      ),
    ),
  ),
);