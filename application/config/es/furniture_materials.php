<?php defined('BASEPATH') OR exit('No direct script access allowed');
//材质分类
$config = array (
  'id' => 'mat_id',
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
      'mat_id' => 
      array (
        'type' => 'long',
      ),
      'mat_name' => 
      array (
        'type' => 'text',
      ),
      'mat_order' => 
      array (
        'type' => 'long',
      ),
      'ftt_id_poi_furniture_top_type' => 
      array (
        'type' => 'long',
      ),
      'desc' => 
      array (
        'type' => 'text',
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