<?php defined('BASEPATH') OR exit('No direct script access allowed');
//连接方案
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
      'condition' => 
      array (
        'type' => 'text',
      ),
      'setup_count' => 
      array (
        'type' => 'long',
      ),
      'is_symmetry' => 
      array (
        'type' => 'long',
      ),
      'distribute_direction' => 
      array (
        'type' => 'keyword',
      ),
      'progressive_base' => 
      array (
        'type' => 'double',
      ),
      'hole_distribution' => 
      array (
        'type' => 'keyword',
      ),
      'min_value' => 
      array (
        'type' => 'long',
      ),
      'left_operator' => 
      array (
        'type' => 'keyword',
      ),
      'max_value' => 
      array (
        'type' => 'long',
      ),
      'right_operator' => 
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