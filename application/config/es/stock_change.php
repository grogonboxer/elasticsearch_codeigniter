<?php defined('BASEPATH') OR exit('No direct script access allowed');

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
      'code' => 
      array (
        'type' => 'text',
      ),
      'actions' => 
      array (
        'type' => 'keyword',
      ),
      'level' => 
      array (
        'type' => 'keyword',
      ),
      'purchase_plan_code' => 
      array (
        'type' => 'text',
      ),
      'type_poi_iae_business_type' => 
      array (
        'type' => 'long',
      ),
      'kind_num' => 
      array (
        'type' => 'long',
      ),
      'receipt_poi_purchase_plan_receipt' => 
      array (
        'type' => 'long',
      ),
      'man_poi_company_admin' => 
      array (
        'type' => 'long',
      ),
      'at_time' => 
      array (
        'type' => 'long',
      ),
      'state' => 
      array (
        'type' => 'text',
      ),
      'remark' => 
      array (
        'type' => 'text',
      ),
      'uid_poi_company_admin' => 
      array (
        'type' => 'long',
      ),
      'com_id_poi_companys' => 
      array (
        'type' => 'long',
      ),
      'mask_delete' => 
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
    ),
  ),
);