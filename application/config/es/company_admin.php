<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array (
  'id' => 'uid',
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
      'uid' => 
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
      'supplier_poi_company_supplier' => 
      array (
        'type' => 'long',
      ),
      'username' => 
      array (
        'type' => 'text',
      ),
      'password' => 
      array (
        'type' => 'keyword',
        'index' => 'no',
        'include_in_all' => 'false'
      ),
      'salt' => 
      array (
        'type' => 'keyword',
        'index' => 'no',
        'include_in_all' => 'false'
      ),
      'name' => 
      array (
        'type' => 'text',
      ),
      'job' => 
      array (
        'type' => 'keyword',
      ),
      'profile_url' => 
      array (
        'type' => 'keyword',
      ),
      'qq' => 
      array (
        'type' => 'keyword',
      ),
      'tel' => 
      array (
        'type' => 'keyword',
      ),
      'email' => 
      array (
        'type' => 'keyword',
      ),
      'role_id_poi_role' => 
      array (
        'type' => 'long',
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
      'login_time' => 
      array (
        'type' => 'long',
      ),
      'active' => 
      array (
        'type' => 'long',
      ),
      'admin_state' => 
      array (
        'type' => 'long',
      ),
      'com_id' => 
      array (
        'type' => 'long',
      ),
      'profile' => 
      array (
        'type' => 'keyword',
      ),
      'power_id' => 
      array (
        'type' => 'long',
      ),
      'user_type' => 
      array (
        'type' => 'long',
      ),
      'power_id_poi_company_admin_power' => 
      array (
        'type' => 'long',
      ),
    ),
  ),
);