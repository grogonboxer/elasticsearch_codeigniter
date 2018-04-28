<?php defined('BASEPATH') OR exit('No direct script access allowed');
//用户反馈
$config = array (
  'id' => 'feedback_id',
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
      'feedback_id' => 
      array (
        'type' => 'long',
      ),
      'contact' => 
      array (
        'type' => 'keyword',
      ),
      'content' => 
      array (
        'type' => 'text',
      ),
      'ip' => 
      array (
        'type' => 'keyword',
      ),
      'user_poi_users' => 
      array (
        'type' => 'long',
      ),
      'feedback_url' => 
      array (
        'type' => 'keyword',
      ),
      'agent' => 
      array (
        'type' => 'keyword',
      ),
      'device' => 
      array (
        'type' => 'keyword',
      ),
      'os_version' => 
      array (
        'type' => 'keyword',
      ),
      'soft_version' => 
      array (
        'type' => 'keyword',
      ),
      'resolution' => 
      array (
        'type' => 'keyword',
      ),
      'status' => 
      array (
        'type' => 'keyword',
      ),
      'handle_time' => 
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
      'mask_delete' => 
      array (
        'type' => 'long',
      ),
      'state' => 
      array (
        'type' => 'long',
      ),
      'u_id' => 
      array (
        'type' => 'long',
      ),
    ),
  ),
);