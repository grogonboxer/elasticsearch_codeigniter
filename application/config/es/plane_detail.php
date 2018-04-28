<?php defined('BASEPATH') OR exit('No direct script access allowed');
//外墙管理
$config = array (
  'id' => 'pd_id',
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
      'pd_id' => 
      array (
        'type' => 'long',
      ),
      'pd_name' => 
      array (
        'type' => 'text',
      ),
      'pd_image_url' => 
      array (
        'type' => 'keyword',
      ),
      'type' => 
      array (
        'type' => 'long',
      ),
      'plane_detail_type_poi_plane_detail_types' => 
      array (
        'type' => 'long',
      ),
      'field_poi_furniture_field_types' => 
      array (
        'type' => 'long',
      ),
      'style_poi_furniture_styles' => 
      array (
        'type' => 'long',
      ),
      'material_poi_furniture_materials' => 
      array (
        'type' => 'long',
      ),
      'ftt_id_poi_furniture_top_type' => 
      array (
        'type' => 'long',
      ),
      'wrap_mode' => 
      array (
        'type' => 'keyword',
      ),
      'uid_poi_admin' => 
      array (
        'type' => 'long',
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
      'mat_type_id' => 
      array (
        'type' => 'long',
      ),
      'style_type_id' => 
      array (
        'type' => 'long',
      ),
      'field_type_id' => 
      array (
        'type' => 'long',
      ),
    ),
  ),
);