<?php defined('BASEPATH') OR exit('No direct script access allowed');

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
      'image_url' => 
      array (
        'type' => 'text',
      ),
      'batch_set' => 
      array (
        'type' => 'text',
      ),
      'model' => 
      array (
        'type' => 'text',
      ),
      'ftt_id_poi_furniture_top_type' => 
      array (
        'type' => 'long',
      ),
      'second_poi_furniture_simple_types' => 
      array (
        'type' => 'long',
      ),
      'third_poi_furniture_types' => 
      array (
        'type' => 'long',
      ),
      'length' => 
      array (
        'type' => 'long',
      ),
      'width' => 
      array (
        'type' => 'long',
      ),
      'height' => 
      array (
        'type' => 'long',
      ),
      'color' => 
      array (
        'type' => 'text',
      ),
      'feature' => 
      array (
        'type' => 'text',
      ),
      'price_poi_unit_price' => 
      array (
        'type' => 'long',
      ),
      'count_poi_unit_count' => 
      array (
        'type' => 'long',
      ),
      'total_stock' => 
      array (
        'type' => 'long',
      ),
      'remark' => 
      array (
        'type' => 'text',
      ),
      'uid_poi_company_admin' => 
      array (
        'type' => 'long',
      ),
      'com_id_poi_companys' => 
      array (
        'type' => 'long',
      ),
      'switch_state' => 
      array (
        'type' => 'text',
      ),
      'mask_delete' => 
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
    ),
  ),
);