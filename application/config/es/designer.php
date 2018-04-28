<?php defined('BASEPATH') OR exit('No direct script access allowed');
//单表无法实现业务
$config = array (
  'id' => 'designer_id',
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
      'designer_id' => 
      array (
        'type' => 'long',
      ),
      'user_poi_users' => 
      array (
        'type' => 'long',
      ),
      'exper' => 
      array (
        'type' => 'long',
      ),
      'slogon' => 
      array (
        'type' => 'keyword',
      ),
      'desc' => 
      array (
        'type' => 'keyword',
      ),
      'order_num' => 
      array (
        'type' => 'long',
      ),
      'sign_num' => 
      array (
        'type' => 'long',
      ),
      'designer_styles' => 
      array (
        'type' => 'keyword',
      ),
      'designer_order' => 
      array (
        'type' => 'long',
      ),
      'designer_type' => 
      array (
        'type' => 'keyword',
      ),
      'designer_state' => 
      array (
        'type' => 'keyword',
      ),
      'designer_state_new' => 
      array (
        'type' => 'keyword',
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
      'u_id' => 
      array (
        'type' => 'long',
      ),
      'designer_type_id' => 
      array (
        'type' => 'long',
      ),
    ),
  ),
);