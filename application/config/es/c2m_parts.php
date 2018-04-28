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
      'part_code' => 
      array (
        'type' => 'text',
      ),
      'part_type' => 
      array (
        'type' => 'long',
      ),
      'constraint' => 
      array (
        'type' => 'keyword',
      ),
      'image_url' => 
      array (
        'type' => 'keyword',
      ),
      'board_type_c2m_code' => 
      array (
        'type' => 'long',
      ),
      'board_type' => 
      array (
        'type' => 'keyword',
      ),
      'c2m_key' => 
      array (
        'type' => 'keyword',
      ),
      'type_poi_c2m_part_type' => 
      array (
        'type' => 'long',
      ),
      'sp_type_poi_c2m_part_simple_type' => 
      array (
        'type' => 'long',
      ),
      'geometry_poi_c2m_geometry' => 
      array (
        'type' => 'long',
      ),
      'board_style_poi_technology_board_style' => 
      array (
        'type' => 'long',
      ),
      'color_poi_c2m_geometry_color' => 
      array (
        'type' => 'long',
      ),
      'model_poi_models' => 
      array (
        'type' => 'long',
      ),
      'color_poi_model_color' => 
      array (
        'type' => 'long',
      ),
      'brand' => 
      array (
        'type' => 'keyword',
      ),
      'series' => 
      array (
        'type' => 'keyword',
      ),
      'remark' => 
      array (
        'type' => 'text',
      ),
      'default_length' => 
      array (
        'type' => 'long',
      ),
      'default_width' => 
      array (
        'type' => 'long',
      ),
      'default_height' => 
      array (
        'type' => 'long',
      ),
      'min_length' => 
      array (
        'type' => 'long',
      ),
      'min_width' => 
      array (
        'type' => 'long',
      ),
      'min_height' => 
      array (
        'type' => 'long',
      ),
      'max_length' => 
      array (
        'type' => 'long',
      ),
      'max_width' => 
      array (
        'type' => 'long',
      ),
      'max_height' => 
      array (
        'type' => 'long',
      ),
      'wardrobe_state' => 
      array (
        'type' => 'keyword',
      ),
      'default_board_poi_material' => 
      array (
        'type' => 'long',
      ),
      'default_poi_technology_connection' => 
      array (
        'type' => 'long',
      ),
      'uid_poi_company_admin' => 
      array (
        'type' => 'long',
      ),
      'dealer_id_poi_company_dealer' => 
      array (
        'type' => 'long',
      ),
      'com_id_poi_companys' => 
      array (
        'type' => 'long',
      ),
      'left_visible' => 
      array (
        'type' => 'long',
      ),
      'top_poi_c2m_parts_group' => 
      array (
        'type' => 'long',
      ),
      'second_poi_c2m_parts_group' => 
      array (
        'type' => 'long',
      ),
      'third_poi_c2m_parts_group' => 
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
      'stack_type' => 
      array (
        'type' => 'keyword',
      ),
    ),
  ),
);