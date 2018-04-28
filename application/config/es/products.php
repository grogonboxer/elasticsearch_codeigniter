<?php defined('BASEPATH') OR exit('No direct script access allowed');
//产品
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
      'image_url' => 
      array (
        'type' => 'keyword',
      ),
      'code' => 
      array (
        'type' => 'keyword',
      ),
      'product_model' => 
      array (
        'type' => 'text',
      ),
      'type_poi_product_top_types' => 
      array (
        'type' => 'long',
      ),
      'type_poi_product_second_types' => 
      array (
        'type' => 'long',
      ),
      'type_poi_product_third_types' => 
      array (
        'type' => 'long',
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
      'dealer_id_poi_company_dealer' => 
      array (
        'type' => 'long',
      ),
      'top_poi_products_group' => 
      array (
        'type' => 'long',
      ),
      'second_poi_products_group' => 
      array (
        'type' => 'long',
      ),
      'third_poi_products_group' => 
      array (
        'type' => 'long',
      ),
      'state' => 
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