<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array (
  'id' => 'com_id',
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
      'com_id' => 
      array (
        'type' => 'long',
      ),
      'com_order' => 
      array (
        'type' => 'long',
      ),
      'com_name' => 
      array (
        'type' => 'text',
      ),
      'full_name' => 
      array (
        'type' => 'text',
      ),
      'cert_url' => 
      array (
        'type' => 'keyword',
      ),
      'trade_cert_url' => 
      array (
        'type' => 'keyword',
      ),
      'org_code_url' => 
      array (
        'type' => 'keyword',
      ),
      'tax_reg_url' => 
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
      'business_scopes' => 
      array (
        'type' => 'keyword',
      ),
      'email' => 
      array (
        'type' => 'keyword',
      ),
      'mobile' => 
      array (
        'type' => 'keyword',
      ),
      'bank_name' => 
      array (
        'type' => 'text',
      ),
      'bank_account_holder' => 
      array (
        'type' => 'keyword',
      ),
      'bank_account' => 
      array (
        'type' => 'keyword',
      ),
      'legal_rep' => 
      array (
        'type' => 'keyword',
      ),
      'staff_count' => 
      array (
        'type' => 'keyword',
      ),
      'registered_fund' => 
      array (
        'type' => 'double',
      ),
      'validity' => 
      array (
        'type' => 'keyword',
      ),
      'cert_type' => 
      array (
        'type' => 'keyword',
      ),
      'found_time' => 
      array (
        'type' => 'long',
      ),
      'com_owner' => 
      array (
        'type' => 'text',
      ),
      'com_join_date' => 
      array (
        'type' => 'keyword',
      ),
      'com_logo' => 
      array (
        'type' => 'keyword',
      ),
      'com_introduction' => 
      array (
        'type' => 'keyword',
      ),
      'com_url' => 
      array (
        'type' => 'keyword',
      ),
      'com_slogan' => 
      array (
        'type' => 'keyword',
      ),
      'com_addr' => 
      array (
        'type' => 'keyword',
      ),
      'com_tel' => 
      array (
        'type' => 'keyword',
      ),
      'qualification_url' => 
      array (
        'type' => 'keyword',
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
      'com_serve' => 
      array (
        'type' => 'keyword',
      ),
      'com_brand_trait' => 
      array (
        'type' => 'keyword',
      ),
      'com_brand_brief' => 
      array (
        'type' => 'keyword',
      ),
      'com_history' => 
      array (
        'type' => 'keyword',
      ),
      'com_brief' => 
      array (
        'type' => 'keyword',
      ),
      'com_title' => 
      array (
        'type' => 'keyword',
      ),
      'com_contact' => 
      array (
        'type' => 'keyword',
      ),
      'brand_type' => 
      array (
        'type' => 'keyword',
      ),
      'com_card' => 
      array (
        'type' => 'keyword',
      ),
      'fur_trait' => 
      array (
        'type' => 'keyword',
      ),
    ),
  ),
);