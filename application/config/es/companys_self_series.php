<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array (
  'id' => 'companys_self_series_id',
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
      'companys_self_series_id' => 
      array (
        'type' => 'long',
      ),
      'companys_self_series_name' => 
      array (
        'type' => 'text',
      ),
      'companys_self_series_num' => 
      array (
        'type' => 'keyword',
      ),
      'companys_self_series_explain' => 
      array (
        'type' => 'keyword',
      ),
      'simple_type' => 
      array (
        'type' => 'keyword',
      ),
      'field_type' => 
      array (
        'type' => 'keyword',
      ),
      'furniture_types' => 
      array (
        'type' => 'keyword',
      ),
      'switch_state' => 
      array (
        'type' => 'keyword',
      ),
      'ftt_id_poi_furniture_top_type' => 
      array (
        'type' => 'long',
      ),
      'com_id_poi_companys' => 
      array (
        'type' => 'long',
      ),
      'com_brand_id_poi_companys_brand' => 
      array (
        'type' => 'long',
      ),
      'uid_poi_company_admin' => 
      array (
        'type' => 'long',
      ),
      'series_time' => 
      array (
        'type' => 'long',
      ),
      'order' => 
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
      'com_brand_id' => 
      array (
        'type' => 'long',
      ),
      'ftt_id' => 
      array (
        'type' => 'long',
      ),
      'com_id' => 
      array (
        'type' => 'long',
      ),
      'series_state' => 
      array (
        'type' => 'long',
      ),
      'add_series_u_id' => 
      array (
        'type' => 'long',
      ),
    ),
  ),
);