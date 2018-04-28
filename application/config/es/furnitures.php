<?php defined('BASEPATH') OR exit('No direct script access allowed');
//商品
$config = array (
  'id' => 'fur_id',
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
      'fur_id' => 
      array (
        'type' => 'long',
      ),
      'ori_fur_poi_furnitures' => 
      array (
        'type' => 'long',
      ),
      'fur_image' => 
      array (
        'type' => 'text',
      ),
      'fur_name' => 
      array (
        'type' => 'text',
      ),
      'fur_num' => 
      array (
        'type' => 'keyword',
      ),
      'fur_code' => 
      array (
        'type' => 'keyword',
      ),
      'fur_info' => 
      array (
        'type' => 'text',
      ),
      'ftt_id_poi_furniture_top_type' => 
      array (
        'type' => 'long',
      ),
      'sp_type_poi_furniture_simple_types' => 
      array (
        'type' => 'long',
      ),
      'fur_type_id_poi_furniture_types' => 
      array (
        'type' => 'long',
      ),
      'fur_size' => 
      array (
        'type' => 'keyword',
      ),
      'fur_cost' => 
      array (
        'type' => 'keyword',
      ),
      'sales_count' => 
      array (
        'type' => 'long',
      ),
      'discount_cost' => 
      array (
        'type' => 'long',
      ),
      'fur_adv' => 
      array (
        'type' => 'keyword',
      ),
      'fur_weight' => 
      array (
        'type' => 'double',
      ),
      'fur_volume' => 
      array (
        'type' => 'double',
      ),
      'material' => 
      array (
        'type' => 'text',
      ),
      'remark' => 
      array (
        'type' => 'keyword',
      ),
      'fur_order' => 
      array (
        'type' => 'long',
      ),
      'brand_order' => 
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
      'st_id_poi_company_stores' => 
      array (
        'type' => 'long',
      ),
      'com_brand_id_poi_companys_brand' => 
      array (
        'type' => 'long',
      ),
      'fur_series_id_poi_companys_self_series' => 
      array (
        'type' => 'long',
      ),
      'fur_mat_id_poi_furniture_materials' => 
      array (
        'type' => 'long',
      ),
      'sku_poi_furniture_sku' => 
      array (
        'type' => 'long',
      ),
      'user_poi_users' => 
      array (
        'type' => 'long',
      ),
      'uid_poi_company_admin' => 
      array (
        'type' => 'long',
      ),
      'uid_poi_company_store_admin' => 
      array (
        'type' => 'long',
      ),
      'fur_states' => 
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
      'com_id' => 
      array (
        'type' => 'long',
      ),
      'fur_scale_range' => 
      array (
        'type' => 'keyword',
      ),
      'fur_pos_type' => 
      array (
        'type' => 'long',
      ),
      'fur_field_id_poi_furniture_field_types' => 
      array (
        'type' => 'long',
      ),
      'fur_style_id_poi_furniture_styles' => 
      array (
        'type' => 'long',
      ),
      'ftt_id' => 
      array (
        'type' => 'long',
      ),
      'u_id' => 
      array (
        'type' => 'long',
      ),
      'fur_cam_distance' => 
      array (
        'type' => 'keyword',
      ),
      'fur_cam_height' => 
      array (
        'type' => 'double',
      ),
      'fur_default_view' => 
      array (
        'type' => 'keyword',
      ),
      'fur_state' => 
      array (
        'type' => 'long',
      ),
      'fur_icon_url' => 
      array (
        'type' => 'keyword',
      ),
      'sp_type_id' => 
      array (
        'type' => 'long',
      ),
      'fur_model_url' => 
      array (
        'type' => 'keyword',
      ),
      'fur_create_time' => 
      array (
        'type' => 'keyword',
      ),
      'fur_type_id' => 
      array (
        'type' => 'long',
      ),
      'fur_style_id' => 
      array (
        'type' => 'long',
      ),
      'fur_field_id' => 
      array (
        'type' => 'long',
      ),
      'fur_mat_id' => 
      array (
        'type' => 'long',
      ),
      'fc_id' => 
      array (
        'type' => 'long',
      ),
      'com_brand_id' => 
      array (
        'type' => 'long',
      ),
      'fur_series_id' => 
      array (
        'type' => 'long',
      ),
    ),
  ),
);