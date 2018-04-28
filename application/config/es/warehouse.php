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
      'code' => 
      array (
        'type' => 'text',
      ),
      'province_poi_province' => 
      array (
        'type' => 'long',
      ),
      'city_poi_city' => 
      array (
        'type' => 'long',
      ),
      'district_poi_district' => 
      array (
        'type' => 'long',
      ),
      'address' => 
      array (
        'type' => 'text',
      ),
      'state' => 
      array (
        'type' => 'keyword',
      ),
      'duty_poi_company_admin' => 
      array (
        'type' => 'long',
      ),
      'tel' => 
      array (
        'type' => 'text',
      ),
      'type_poi_warehouse_types' => 
      array (
        'type' => 'long',
      ),
      'isdefault' => 
      array (
        'type' => 'text',
      ),
      'remark' => 
      array (
        'type' => 'text',
      ),
      'uid_poi_company_admin' => 
      array (
        'type' => 'text',
      ),
      'com_id_poi_companys' => 
      array (
        'type' => 'long',
      ),
      'mask_delete' => 
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
    ),
  ),
);