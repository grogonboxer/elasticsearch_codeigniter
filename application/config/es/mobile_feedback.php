<?php defined('BASEPATH') OR exit('No direct script access allowed');
//反馈
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
      'app_id' => 
      array (
        'type' => 'keyword',
      ),
      'content' => 
      array (
        'type' => 'text',
      ),
      'image_url' => 
      array (
        'type' => 'keyword',
      ),
      'user_poi_users' => 
      array (
        'type' => 'long',
      ),
      'device_info' => 
      array (
        'type' => 'text',
      ),
      'system_version' => 
      array (
        'type' => 'text',
      ),
      'version' => 
      array (
        'type' => 'text',
      ),
      'IMEI' => 
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