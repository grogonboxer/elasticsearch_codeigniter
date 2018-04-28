<?php defined('BASEPATH') OR exit('No direct script access allowed');
//客户
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
      'spname' => 
      array (
        'type' => 'text',
      ),
      'fullname' => 
      array (
        'type' => 'text',
      ),
      'tel' => 
      array (
        'type' => 'keyword',
      ),
      'avatar_url' => 
      array (
        'type' => 'keyword',
      ),
      'company_type' => 
      array (
        'type' => 'keyword',
      ),
      'acronym' => 
      array (
        'type' => 'keyword',
      ),
      'pid_poi_professions' => 
      array (
        'type' => 'long',
      ),
      'default_poi_ofc_linkman' => 
      array (
        'type' => 'long',
      ),
      'seller_poi_sell_users' => 
      array (
        'type' => 'long',
      ),
      'seller_poi_users' => 
      array (
        'type' => 'long',
      ),
      'st_id_poi_company_stores' => 
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
      'default_poi_ofc_address' => 
      array (
        'type' => 'long',
      ),
      'isshare' => 
      array (
        'type' => 'keyword',
      ),
      'switch_state' => 
      array (
        'type' => 'keyword',
      ),
      'remark' => 
      array (
        'type' => 'text',
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