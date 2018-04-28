<?php defined('BASEPATH') OR exit('No direct script access allowed');
//部件
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
      'pt_code' => 
      array (
        'type' => 'text',
      ),
      'pt_name' => 
      array (
        'type' => 'text',
      ),
      'pt_image_url' => 
      array (
        'type' => 'keyword',
      ),
      'pd_model_select' => 
      array (
        'type' => 'keyword',
      ),
      'pt_size_unit' => 
      array (
        'type' => 'keyword',
      ),
      'pt_size_min' => 
      array (
        'type' => 'keyword',
      ),
      'pt_size_max' => 
      array (
        'type' => 'keyword',
      ),
      'pt_size_default' => 
      array (
        'type' => 'keyword',
      ),
      'pt_segment_size' => 
      array (
        'type' => 'keyword',
      ),
      'merged_part' => 
      array (
        'type' => 'long',
      ),
      'series_poi_companys_self_series' => 
      array (
        'type' => 'long',
      ),
      'sp_type_poi_office_part_simpletypes' => 
      array (
        'type' => 'long',
      ),
      'pt_type_poi_office_part_types' => 
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
      'brand_poi_companys_brand' => 
      array (
        'type' => 'long',
      ),
      'top_poi_office_parts_group' => 
      array (
        'type' => 'long',
      ),
      'second_poi_office_parts_group' => 
      array (
        'type' => 'long',
      ),
      'third_poi_office_parts_group' => 
      array (
        'type' => 'long',
      ),
      'introduce' => 
      array (
        'type' => 'keyword',
      ),
      'specifications' => 
      array (
        'type' => 'long',
      ),
      'model_poi_models' => 
      array (
        'type' => 'long',
      ),
      'parts_state' => 
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
      'companys_self_series_id' => 
      array (
        'type' => 'long',
      ),
      'pt_model_url' => 
      array (
        'type' => 'keyword',
      ),
      'pt_type_id' => 
      array (
        'type' => 'long',
      ),
      'pt_sp_type_id' => 
      array (
        'type' => 'long',
      ),
      'com_id' => 
      array (
        'type' => 'long',
      ),
      'create_user' => 
      array (
        'type' => 'long',
      ),
      'pt_state' => 
      array (
        'type' => 'long',
      ),
      'parts_brands' => 
      array (
        'type' => 'long',
      ),
    ),
  ),
);