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
      'icon_url' => 
      array (
        'type' => 'keyword',
      ),
      'screen_cut_url' => 
      array (
        'type' => 'keyword',
      ),
      'configuration_poi_product_configuration' => 
      array (
        'type' => 'long',
      ),
      'sp_type_poi_c2m_bureau_simple_types' => 
      array (
        'type' => 'long',
      ),
      'type_poi_c2m_bureau_types' => 
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
      'dr' => 
      array (
        'type' => 'long',
      ),
      'dl' => 
      array (
        'type' => 'long',
      ),
      'link_type' => 
      array (
        'type' => 'text',
      ),
      'skirtboard_height' => 
      array (
        'type' => 'long',
      ),
      'skirtboard_material_poi_material' => 
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
      'relations' => 
      array (
        'type' => 'keyword',
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
      'dealer_id_poi_company_dealer' => 
      array (
        'type' => 'long',
      ),
      'bureau_state' => 
      array (
        'type' => 'keyword',
      ),
      'top_url' => 
      array (
        'type' => 'keyword',
      ),
      'left_url' => 
      array (
        'type' => 'keyword',
      ),
      'front_url' => 
      array (
        'type' => 'keyword',
      ),
      'graph_url' => 
      array (
        'type' => 'keyword',
      ),
      'explosive_url' => 
      array (
        'type' => 'text',
      ),
      'switch_state' => 
      array (
        'type' => 'keyword',
      ),
      'top_back_type' => 
      array (
        'type' => 'long',
      ),
      'top_back_distance' => 
      array (
        'type' => 'double',
      ),
      'top_side_type' => 
      array (
        'type' => 'long',
      ),
      'top_side_distance' => 
      array (
        'type' => 'double',
      ),
      'side_back_type' => 
      array (
        'type' => 'long',
      ),
      'side_back_distance' => 
      array (
        'type' => 'double',
      ),
      'bottom_distance' => 
      array (
        'type' => 'double',
      ),
      'side_distance' => 
      array (
        'type' => 'double',
      ),
      'foot_deploy_type' => 
      array (
        'type' => 'keyword',
      ),
      'foot_material_poi_material' => 
      array (
        'type' => 'long',
      ),
      'pedestal_craft' => 
      array (
        'type' => 'keyword',
      ),
      'vertical_foot_count' => 
      array (
        'type' => 'long',
      ),
      'foot_distance' => 
      array (
        'type' => 'double',
      ),
      'front_foot_length' => 
      array (
        'type' => 'long',
      ),
      'back_foot_length' => 
      array (
        'type' => 'long',
      ),
      'left_foot_length' => 
      array (
        'type' => 'long',
      ),
      'right_foot_length' => 
      array (
        'type' => 'long',
      ),
      'body_material_poi_material' => 
      array (
        'type' => 'long',
      ),
      'top_board_material_poi_material' => 
      array (
        'type' => 'long',
      ),
      'bottom_board_material_poi_material' => 
      array (
        'type' => 'long',
      ),
      'back_board_material_poi_material' => 
      array (
        'type' => 'long',
      ),
      'side_board_material_poi_material' => 
      array (
        'type' => 'long',
      ),
      'edge_material_poi_material' => 
      array (
        'type' => 'long',
      ),
      'edge_type_poi_technology_edge_style' => 
      array (
        'type' => 'long',
      ),
      'sheat_connect_foot' => 
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
      'type' => 
      array (
        'type' => 'keyword',
      ),
    ),
  ),
);