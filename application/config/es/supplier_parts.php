<?php defined('BASEPATH') OR exit('No direct script access allowed');
//零部件管理
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
      'supplier_poi_company_supplier' => 
      array (
        'type' => 'long',
      ),
      'com_id_poi_companys' => 
      array (
        'type' => 'long',
      ),
      'name' => 
      array (
        'type' => 'text',
      ),
      'sp_type_poi_supplier_part_sp_type' => 
      array (
        'type' => 'long',
      ),
      'type_poi_supplier_part_type' => 
      array (
        'type' => 'long',
      ),
      'metatype' => 
      array (
        'type' => 'keyword',
      ),
      'real_part_id' => 
      array (
        'type' => 'keyword',
      ),
      'code' => 
      array (
        'type' => 'text',
      ),
      'preview_url' => 
      array (
        'type' => 'keyword',
      ),
      'main_color' => 
      array (
        'type' => 'keyword',
      ),
      'color_url' => 
      array (
        'type' => 'keyword',
      ),
      'main_material' => 
      array (
        'type' => 'keyword',
      ),
      'material_part' => 
      array (
        'type' => 'keyword',
      ),
      'size' => 
      array (
        'type' => 'keyword',
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
      'version' => 
      array (
        'type' => 'keyword',
      ),
      'area' => 
      array (
        'type' => 'double',
      ),
      'volume' => 
      array (
        'type' => 'double',
      ),
      'weight' => 
      array (
        'type' => 'double',
      ),
      'remark' => 
      array (
        'type' => 'text',
      ),
      'top_poi_supplier_parts_group' => 
      array (
        'type' => 'long',
      ),
      'second_poi_supplier_parts_group' => 
      array (
        'type' => 'long',
      ),
      'third_poi_supplier_parts_group' => 
      array (
        'type' => 'long',
      ),
      'part_state' => 
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