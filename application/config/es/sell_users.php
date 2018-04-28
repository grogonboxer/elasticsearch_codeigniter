<?php defined('BASEPATH') OR exit('No direct script access allowed');
//销售设计师
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
      'user_poi_users' => 
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
      'default_poi_ofc_cus_companys' => 
      array (
        'type' => 'long',
      ),
      'discount_coefficient' => 
      array (
        'type' => 'double',
      ),
      'job' => 
      array (
        'type' => 'text',
      ),
      'user_type' => 
      array (
        'type' => 'long',
      ),
      'sell_code' => 
      array (
        'type' => 'keyword',
      ),
      'st_active' => 
      array (
        'type' => 'long',
      ),
      'st_boss_name' => 
      array (
        'type' => 'text',
      ),
      'st_public_type' => 
      array (
        'type' => 'keyword',
      ),
      'st_edu' => 
      array (
        'type' => 'keyword',
      ),
      'st_tel' => 
      array (
        'type' => 'keyword',
      ),
      'st_profile' => 
      array (
        'type' => 'keyword',
      ),
      'st_idcode' => 
      array (
        'type' => 'keyword',
      ),
      'is_designer' => 
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
      'u_id' => 
      array (
        'type' => 'long',
      ),
      'comp_id' => 
      array (
        'type' => 'long',
      ),
      'st_id' => 
      array (
        'type' => 'long',
      ),
    ),
  ),
);