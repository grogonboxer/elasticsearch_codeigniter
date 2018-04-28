<?php defined('BASEPATH') OR exit('No direct script access allowed');
//联系人
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
      'callname' => 
      array (
        'type' => 'text',
      ),
      'mobile' => 
      array (
        'type' => 'text',
      ),
      'fixed_tel' => 
      array (
        'type' => 'keyword',
      ),
      'email' => 
      array (
        'type' => 'keyword',
      ),
      'sex' => 
      array (
        'type' => 'long',
      ),
      'job' => 
      array (
        'type' => 'text',
      ),
      'remark' => 
      array (
        'type' => 'text',
      ),
      'seller_poi_users' => 
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
      'uid_poi_company_admin' => 
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