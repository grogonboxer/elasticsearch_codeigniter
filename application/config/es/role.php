<?php defined('BASEPATH') OR exit('No direct script access allowed');
//角色与权限
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
      'key' => 
      array (
        'type' => 'keyword',
      ),
      'scope' => 
      array (
        'type' => 'text',
      ),
      'visitor_scope' => 
      array (
        'type' => 'text',
      ),
      'remark' => 
      array (
        'type' => 'text',
      ),
      'uid_poi_admin' => 
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
      'create_time' => 
      array (
        'type' => 'long',
      ),
      'update_time' => 
      array (
        'type' => 'long',
      ),
      'switch_state' => 
      array (
        'type' => 'keyword',
      ),
      'mask_delete' => 
      array (
        'type' => 'long',
      ),
    ),
  ),
);