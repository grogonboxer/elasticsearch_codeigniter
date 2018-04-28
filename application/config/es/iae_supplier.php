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
      'com_id_poi_companys' => 
      array (
        'type' => 'long',
      ),
      'dealer_id_poi_company_dealer' => 
      array (
        'type' => 'long',
      ),
      'uid_poi_company_admin' => 
      array (
        'type' => 'long',
      ),
      'name' => 
      array (
        'type' => 'text',
      ),
      'full_name' => 
      array (
        'type' => 'text',
      ),
      'from_type' => 
      array (
        'type' => 'text',
      ),
      'function_type' => 
      array (
        'type' => 'text',
      ),
      'category_poi_iae_supplier_category' => 
      array (
        'type' => 'text',
      ),
      'scope' => 
      array (
        'type' => 'text',
      ),
      'stars' => 
      array (
        'type' => 'text',
      ),
      'registered_capital' => 
      array (
        'type' => 'double',
      ),
      'tel' => 
      array (
        'type' => 'text',
      ),
      'linkman' => 
      array (
        'type' => 'text',
      ),
      'address' => 
      array (
        'type' => 'text',
      ),
      'phone' => 
      array (
        'type' => 'text',
      ),
      'email' => 
      array (
        'type' => 'text',
      ),
      'code' => 
      array (
        'type' => 'text',
      ),
      'area_poi_iae_supplier_area' => 
      array (
        'type' => 'long',
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
      'remark' => 
      array (
        'type' => 'text',
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