<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array (
  'id' => 'com_area_id',
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
      'com_area_id' => 
      array (
        'type' => 'long',
      ),
      'com_area_name' => 
      array (
        'type' => 'text',
      ),
      'com_area_time' => 
      array (
        'type' => 'long',
      ),
      'com_area_num' => 
      array (
        'type' => 'long',
      ),
      'com_area_note' => 
      array (
        'type' => 'keyword',
      ),
      'com_area_type_poi_company_stores_types' => 
      array (
        'type' => 'long',
      ),
      'com_id_poi_companys' => 
      array (
        'type' => 'long',
      ),
      'uid_poi_company_admin' => 
      array (
        'type' => 'long',
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
      'com_area_user' => 
      array (
        'type' => 'long',
      ),
      'com_id' => 
      array (
        'type' => 'long',
      ),
      'com_area_states' => 
      array (
        'type' => 'long',
      ),
      'com_area_type' => 
      array (
        'type' => 'long',
      ),
    ),
  ),
);