<?php defined('BASEPATH') OR exit('No direct script access allowed');
//五金孔位方案
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
      'preview_url' => 
      array (
        'type' => 'keyword',
      ),
      'uid_poi_admin' => 
      array (
        'type' => 'long',
      ),
      'remark' => 
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