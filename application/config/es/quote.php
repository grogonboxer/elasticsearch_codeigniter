<?php defined('BASEPATH') OR exit('No direct script access allowed');
//报价单
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
      'number' => 
      array (
        'type' => 'text',
      ),
      'title' => 
      array (
        'type' => 'text',
      ),
      'cus_com_poi_ofc_cus_companys' => 
      array (
        'type' => 'long',
      ),
      'company_name' => 
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
      'address' => 
      array (
        'type' => 'text',
      ),
      'receipt_remark' => 
      array (
        'type' => 'text',
      ),
      'postcode' => 
      array (
        'type' => 'keyword',
      ),
      'remark' => 
      array (
        'type' => 'text',
      ),
      'seller_poi_users' => 
      array (
        'type' => 'long',
      ),
      'st_id_poi_company_stores' => 
      array (
        'type' => 'long',
      ),
      'dealer_id_poi_company_dealer' => 
      array (
        'type' => 'long',
      ),
      'com_id_poi_companys' => 
      array (
        'type' => 'long',
      ),
      'total_price' => 
      array (
        'type' => 'double',
      ),
      'discount_price' => 
      array (
        'type' => 'double',
      ),
      'quote_state' => 
      array (
        'type' => 'keyword',
      ),
      'order_poi_ofc_order' => 
      array (
        'type' => 'long',
      ),
      'code' => 
      array (
        'type' => 'keyword',
      ),
      'has_bill' => 
      array (
        'type' => 'long',
      ),
      'cycle_time' => 
      array (
        'type' => 'long',
      ),
      'delivery_time' => 
      array (
        'type' => 'long',
      ),
      'paymode' => 
      array (
        'type' => 'keyword',
      ),
      'payment' => 
      array (
        'type' => 'double',
      ),
      'buyer' => 
      array (
        'type' => 'text',
      ),
      'seller' => 
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