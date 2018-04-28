<?php defined('BASEPATH') OR exit('No direct script access allowed');
//客户地址
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
      'receipt' => 
      array (
        'type' => 'text',
      ),
      'tel' => 
      array (
        'type' => 'keyword',
      ),
      'phone' => 
      array (
        'type' => 'keyword',
      ),
      'email' => 
      array (
        'type' => 'keyword',
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
      'detail_address' => 
      array (
        'type' => 'text',
      ),
      'full_address' => 
      array (
        'type' => 'text',
      ),
      'area' => 
      array (
        'type' => 'keyword',
      ),
      'department' => 
      array (
        'type' => 'keyword',
      ),
      'remark' => 
      array (
        'type' => 'keyword',
      ),
      'uid_poi_company_admin' => 
      array (
        'type' => 'long',
      ),
      'cus_com_poi_ofc_cus_companys' => 
      array (
        'type' => 'long',
      ),
      'supplier_poi_company_supplier' => 
      array (
        'type' => 'long',
      ),
      'seller_poi_users' => 
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
    ),
  ),
);