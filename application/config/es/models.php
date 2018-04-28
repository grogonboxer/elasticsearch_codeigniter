<?php defined('BASEPATH') OR exit('No direct script access allowed');
//模型管理
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
      'icon_url' => 
      array (
        'type' => 'keyword',
      ),
      'name' => 
      array (
        'type' => 'text',
      ),
      'code' => 
      array (
        'type' => 'keyword',
      ),
      'sample_image_url' => 
      array (
        'type' => 'keyword',
      ),
      'requirement_url' => 
      array (
        'type' => 'keyword',
      ),
      'preview_model_url' => 
      array (
        'type' => 'keyword',
      ),
      'medium_model_url' => 
      array (
        'type' => 'keyword',
      ),
      'high_model_url' => 
      array (
        'type' => 'keyword',
      ),
      'preview_fbx_model_url' => 
      array (
        'type' => 'keyword',
      ),
      'medium_fbx_model_url' => 
      array (
        'type' => 'keyword',
      ),
      'high_fbx_model_url' => 
      array (
        'type' => 'keyword',
      ),
      'medium_triangle_count' => 
      array (
        'type' => 'long',
      ),
      'size' => 
      array (
        'type' => 'keyword',
      ),
      'pos_type' => 
      array (
        'type' => 'long',
      ),
      'scale_range' => 
      array (
        'type' => 'keyword',
      ),
      'default_view' => 
      array (
        'type' => 'keyword',
      ),
      'cam_distance' => 
      array (
        'type' => 'keyword',
      ),
      'cam_height' => 
      array (
        'type' => 'keyword',
      ),
      'sp_type_poi_model_simple_types' => 
      array (
        'type' => 'long',
      ),
      'type_poi_model_types' => 
      array (
        'type' => 'long',
      ),
      'model_state' => 
      array (
        'type' => 'keyword',
      ),
      'switch_state' => 
      array (
        'type' => 'keyword',
      ),
      'is_public' => 
      array (
        'type' => 'long',
      ),
      'frontend_visible' => 
      array (
        'type' => 'keyword',
      ),
      'com_id_poi_companys' => 
      array (
        'type' => 'long',
      ),
      'dealer_id_poi_company_dealer' => 
      array (
        'type' => 'long',
      ),
      'user_poi_users' => 
      array (
        'type' => 'long',
      ),
      'uid_poi_admin' => 
      array (
        'type' => 'long',
      ),
      'ori_fur_poi_furnitures' => 
      array (
        'type' => 'long',
      ),
      'rid_poi_render_tasks' => 
      array (
        'type' => 'long',
      ),
      'owner_type' => 
      array (
        'type' => 'keyword',
      ),
      'main_material' => 
      array (
        'type' => 'keyword',
      ),
      'sub_material' => 
      array (
        'type' => 'keyword',
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
      'pt_id' => 
      array (
        'type' => 'long',
      ),
      'fur_id' => 
      array (
        'type' => 'long',
      ),
      'oud_poi_office_unit_design' => 
      array (
        'type' => 'long',
      ),
    ),
  ),
);