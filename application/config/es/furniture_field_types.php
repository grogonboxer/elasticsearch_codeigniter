<?php defined('BASEPATH') OR exit('No direct script access allowed');
//空间名称
$config = array (
  'id' => 'field_id',
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
      'field_id' => 
      array (
        'type' => 'long',
      ),
      'field_name' => 
      array (
        'type' => 'text',
      ),
      'field_order' => 
      array (
        'type' => 'long',
      ),
      'ftt_id_poi_furniture_top_type' => 
      array (
        'type' => 'long',
      ),
      'desc' => 
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
      'ftt_id' => 
      array (
        'type' => 'long',
      ),
    ),
  ),
);