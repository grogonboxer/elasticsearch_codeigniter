<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array (
  'id' => 'uid',
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
      'uid' => 
      array (
        'type' => 'long',
      ),
      'username' => 
      array (
        'type' => 'text',
      ),
      'password' => 
      array (
        'type' => 'keyword',
        'index' => 'no',
        'include_in_all' => 'false'
      ),
      'salt' => 
      array (
        'type' => 'keyword',
        'index' => 'no',
        'include_in_all' => 'false'
      ),
      'nick_name' => 
      array (
        'type' => 'text',
      ),
      'profile_url' => 
      array (
        'type' => 'keyword',
      ),
      'role_id_poi_role' => 
      array (
        'type' => 'long',
      ),
      'qq' => 
      array (
        'type' => 'keyword',
      ),
      'email' => 
      array (
        'type' => 'keyword',
      ),
      'tel' => 
      array (
        'type' => 'keyword',
      ),
      'switch_state' => 
      array (
        'type' => 'keyword',
      ),
      'rdl_poi_render_level' => 
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
      'login_time' => 
      array (
        'type' => 'double',
      ),
      'power_id' => 
      array (
        'type' => 'long',
      ),
    ),
  ),
);