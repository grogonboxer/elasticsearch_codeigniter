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
      'level' => 
      array (
        'type' => 'text',
      ),
      'material_poi_material' => 
      array (
        'type' => 'long',
      ),
      'product_poi_end_products' => 
      array (
        'type' => 'long',
      ),
      'name' => 
      array (
        'type' => 'text',
      ),
      'model' => 
      array (
        'type' => 'text',
      ),
      'size' => 
      array (
        'type' => 'text',
      ),
      'amount' => 
      array (
        'type' => 'long',
      ),
      'warehouse_poi_warehouse' => 
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