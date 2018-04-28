<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array (
  'id' => 'com_brand_id',
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
      'com_brand_id' => 
      array (
        'type' => 'long',
      ),
      'com_brand_name' => 
      array (
        'type' => 'text',
      ),
      'english_name' => 
      array (
        'type' => 'text',
      ),
      'com_id_poi_companys' => 
      array (
        'type' => 'long',
      ),
      'com_brand_num' => 
      array (
        'type' => 'keyword',
      ),
      'logo_url' => 
      array (
        'type' => 'keyword',
      ),
      'com_brand_explain' => 
      array (
        'type' => 'keyword',
      ),
      'slogon' => 
      array (
        'type' => 'keyword',
      ),
      'tel' => 
      array (
        'type' => 'keyword',
      ),
      'uid_poi_company_admin' => 
      array (
        'type' => 'long',
      ),
      'brands_state' => 
      array (
        'type' => 'keyword',
      ),
      'auth_cert_url' => 
      array (
        'type' => 'keyword',
      ),
      'order' => 
      array (
        'type' => 'long',
      ),
      'tags' => 
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
      'com_id' => 
      array (
        'type' => 'long',
      ),
      'create_user' => 
      array (
        'type' => 'keyword',
      ),
      'brand_state' => 
      array (
        'type' => 'long',
      ),
    ),
  ),
);