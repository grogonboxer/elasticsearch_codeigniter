<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array (
  'id' => 'deal_id',
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
      'deal_id' => 
      array (
        'type' => 'long',
      ),
      'logo_url' => 
      array (
        'type' => 'keyword',
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
      'code' => 
      array (
        'type' => 'keyword',
      ),
      'name' => 
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
      'addr' => 
      array (
        'type' => 'text',
      ),
      'principal' => 
      array (
        'type' => 'text',
      ),
      'principal_tel' => 
      array (
        'type' => 'keyword',
      ),
      'tel' => 
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
      'registered_fund' => 
      array (
        'type' => 'double',
      ),
      'staff_count' => 
      array (
        'type' => 'long',
      ),
      'dealer_state' => 
      array (
        'type' => 'keyword',
      ),
      'validity' => 
      array (
        'type' => 'long',
      ),
      'found_time' => 
      array (
        'type' => 'long',
      ),
      'desc' => 
      array (
        'type' => 'text',
      ),
      'com_id_poi_companys' => 
      array (
        'type' => 'long',
      ),
      'st_area_id_poi_company_area' => 
      array (
        'type' => 'long',
      ),
      'parent_poi_company_dealer' => 
      array (
        'type' => 'long',
      ),
      'deal_type' => 
      array (
        'type' => 'keyword',
      ),
      'cert_type' => 
      array (
        'type' => 'keyword',
      ),
      'business_scopes' => 
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
      'dealer_status' => 
      array (
        'type' => 'long',
      ),
    ),
  ),
);