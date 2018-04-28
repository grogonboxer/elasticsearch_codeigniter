<?php defined('BASEPATH') OR exit('No direct script access allowed');
//多工位模板
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
      'amount' => 
      array (
        'type' => 'long',
      ),
      'uid_poi_admin' => 
      array (
        'type' => 'long',
      ),
      'tmp_preview_url' => 
      array (
        'type' => 'keyword',
      ),
      'part_type_poi_office_part_types' => 
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
    ),
  ),
);