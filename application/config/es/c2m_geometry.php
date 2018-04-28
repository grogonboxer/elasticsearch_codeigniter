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
      'name' => 
      array (
        'type' => 'text',
      ),
      'icon_url' => 
      array (
        'type' => 'keyword',
      ),
      'params' => 
      array (
        'type' => 'keyword',
      ),
      'params_descs' => 
      array (
        'type' => 'keyword',
      ),
      'type' => 
      array (
        'type' => 'keyword',
      ),
      'bounds' => 
      array (
        'type' => 'keyword',
      ),
      'outline' => 
      array (
        'type' => 'keyword',
      ),
      'inline' => 
      array (
        'type' => 'keyword',
      ),
      'origin' => 
      array (
        'type' => 'keyword',
      ),
      'x' => 
      array (
        'type' => 'keyword',
      ),
      'source_xml_url' => 
      array (
        'type' => 'keyword',
      ),
      'uid_poi_admin' => 
      array (
        'type' => 'long',
      ),
      'switch_state' => 
      array (
        'type' => 'keyword',
      ),
      'is_public' => 
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
    ),
  ),
);