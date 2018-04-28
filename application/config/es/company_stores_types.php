<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array (
  'id' => 'st_stores_types_id',
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
      'st_stores_types_id' => 
      array (
        'type' => 'long',
      ),
      'com_stores_types_num' => 
      array (
        'type' => 'long',
      ),
      'com_stores_types_time' => 
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
      'com_stores_types_name' => 
      array (
        'type' => 'text',
      ),
      'com_stores_types_note' => 
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
      'switch_state' => 
      array (
        'type' => 'keyword',
      ),
      'mask_delete' => 
      array (
        'type' => 'long',
      ),
      'com_stores_types_user' => 
      array (
        'type' => 'long',
      ),
      'com_id' => 
      array (
        'type' => 'long',
      ),
      'com_stores_types_states' => 
      array (
        'type' => 'long',
      ),
      'com_stores_types_user_poi_users' => 
      array (
        'type' => 'long',
      ),
    ),
  ),
);