<?php defined('BASEPATH') OR exit('No direct script access allowed');
//生产订单
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
      'order_poi_allotted_order' => 
      array (
        'type' => 'long',
      ),
      'order_poi_ofc_order' => 
      array (
        'type' => 'long',
      ),
      'receive_type' => 
      array (
        'type' => 'keyword',
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
      'deliver_addr' => 
      array (
        'type' => 'text',
      ),
      'deliver_time' => 
      array (
        'type' => 'long',
      ),
      'receipt_company' => 
      array (
        'type' => 'text',
      ),
      'show_cost' => 
      array (
        'type' => 'keyword',
      ),
      'uid_poi_company_admin' => 
      array (
        'type' => 'long',
      ),
      'com_id_poi_companys' => 
      array (
        'type' => 'long',
      ),
      'supplier_poi_company_supplier' => 
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
      'paid' => 
      array (
        'type' => 'double',
      ),
      'cost' => 
      array (
        'type' => 'double',
      ),
      'order_state' => 
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
    ),
  ),
);