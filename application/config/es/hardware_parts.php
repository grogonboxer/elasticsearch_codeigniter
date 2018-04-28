<?php defined('BASEPATH') OR exit('No direct script access allowed');
//五金零部件
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
      'logic_type' => 
      array (
        'type' => 'keyword',
      ),
      'version' => 
      array (
        'type' => 'text',
      ),
      'preview_url' => 
      array (
        'type' => 'keyword',
      ),
      'default_poi_material' => 
      array (
        'type' => 'long',
      ),
      'hole_poi_hardware_hole_config' => 
      array (
        'type' => 'long',
      ),
      'top_poi_hardware_parts_group' => 
      array (
        'type' => 'long',
      ),
      'second_poi_hardware_parts_group' => 
      array (
        'type' => 'long',
      ),
      'third_poi_hardware_parts_group' => 
      array (
        'type' => 'long',
      ),
      'top_parts_type' => 
      array (
        'type' => 'long',
      ),
      'second_poi_hardware_second_parts_type' => 
      array (
        'type' => 'long',
      ),
      'third_poi_hardware_third_parts_type' => 
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
      'dealer_id_poi_company_dealer' => 
      array (
        'type' => 'long',
      ),
      'size_type' => 
      array (
        'type' => 'keyword',
      ),
      'diameter' => 
      array (
        'type' => 'double',
      ),
      'length' => 
      array (
        'type' => 'double',
      ),
      'width' => 
      array (
        'type' => 'double',
      ),
      'thick' => 
      array (
        'type' => 'double',
      ),
      'remark' => 
      array (
        'type' => 'text',
      ),
      'state' => 
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