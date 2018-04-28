<?php defined('BASEPATH') OR exit('No direct script access allowed');
//原材料
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
      'version' => 
      array (
        'type' => 'text',
      ),
      'width' => 
      array (
        'type' => 'double',
      ),
      'length' => 
      array (
        'type' => 'double',
      ),
      'height' => 
      array (
        'type' => 'double',
      ),
      'diameter' => 
      array (
        'type' => 'double',
      ),
      'preview_url' => 
      array (
        'type' => 'text',
      ),
      'top_poi_material_top_types' => 
      array (
        'type' => 'long',
      ),
      'second_poi_material_second_types' => 
      array (
        'type' => 'long',
      ),
      'third_poi_material_third_types' => 
      array (
        'type' => 'long',
      ),
      'type' => 
      array (
        'type' => 'keyword',
      ),
      'main_material' => 
      array (
        'type' => 'text',
      ),
      'hole_poi_hardware_hole_config' => 
      array (
        'type' => 'long',
      ),
      'material_poi_material_board' => 
      array (
        'type' => 'long',
      ),
      'top_poi_material_group' => 
      array (
        'type' => 'long',
      ),
      'second_poi_material_group' => 
      array (
        'type' => 'long',
      ),
      'third_poi_material_group' => 
      array (
        'type' => 'long',
      ),
      'com_id_poi_companys' => 
      array (
        'type' => 'long',
      ),
      'uid_poi_company_admin' => 
      array (
        'type' => 'long',
      ),
      'amount_unit' => 
      array (
        'type' => 'keyword',
      ),
      'price_unit' => 
      array (
        'type' => 'keyword',
      ),
      'produce_place' => 
      array (
        'type' => 'keyword',
      ),
      'brand' => 
      array (
        'type' => 'keyword',
      ),
      'package_amount' => 
      array (
        'type' => 'double',
      ),
      'package_unit' => 
      array (
        'type' => 'keyword',
      ),
      'aver_price' => 
      array (
        'type' => 'double',
      ),
      'convert_ratio' => 
      array (
        'type' => 'double',
      ),
      'features' => 
      array (
        'type' => 'keyword',
      ),
      'total_stock' => 
      array (
        'type' => 'long',
      ),
      'remark' => 
      array (
        'type' => 'keyword',
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
    ),
  ),
);