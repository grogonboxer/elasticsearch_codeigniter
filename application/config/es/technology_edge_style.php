<?php defined('BASEPATH') OR exit('No direct script access allowed');
//封边样式
$config = array (
  'id' => 'id',
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
      'id' => 
      array (
        'type' => 'long',
      ),
      'name' => 
      array (
        'type' => 'text',
      ),
      'style_poi_technology_board_style' => 
      array (
        'type' => 'long',
      ),
      'preview_url' => 
      array (
        'type' => 'keyword',
      ),
      'thick' => 
      array (
        'type' => 'keyword',
      ),
      'uid_poi_admin' => 
      array (
        'type' => 'long',
      ),
      'switch_state' => 
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
      'texture_direction' => 
      array (
        'type' => 'keyword',
      ),
    ),
  ),
);