<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array (
  'id' => 'des_id',
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
      'des_id' => 
      array (
        'type' => 'long',
      ),
      'des_name' => 
      array (
        'type' => 'text',
      ),
      'des_cut_url' => 
      array (
        'type' => 'keyword',
      ),
      'cut_poi_render_tasks' => 
      array (
        'type' => 'long',
      ),
      'des_info' => 
      array (
        'type' => 'keyword',
      ),
      'customer_id_poi_ofc_cus_companys' => 
      array (
        'type' => 'long',
      ),
      'user_poi_users' => 
      array (
        'type' => 'long',
      ),
      'uid_poi_admin' => 
      array (
        'type' => 'long',
      ),
      'uid_poi_company_admin' => 
      array (
        'type' => 'long',
      ),
      'com_id_poi_companys' => 
      array (
        'type' => 'long',
      ),
      'fd_id_poi_design_folders' => 
      array (
        'type' => 'long',
      ),
      'apt_id_poi_apartment' => 
      array (
        'type' => 'long',
      ),
      'style_poi_furniture_styles' => 
      array (
        'type' => 'long',
      ),
      'des_area' => 
      array (
        'type' => 'double',
      ),
      'design_type' => 
      array (
        'type' => 'keyword',
      ),
      'enable_limit' => 
      array (
        'type' => 'keyword',
      ),
      'limit_wall' => 
      array (
        'type' => 'keyword',
      ),
      'limit_floor' => 
      array (
        'type' => 'keyword',
      ),
      'limit_ceiling' => 
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
      'fd_id' => 
      array (
        'type' => 'long',
      ),
      'des_time' => 
      array (
        'type' => 'double',
      ),
      'dest_id' => 
      array (
        'type' => 'long',
      ),
      'det_id' => 
      array (
        'type' => 'long',
      ),
      'apt_id' => 
      array (
        'type' => 'long',
      ),
      'u_id' => 
      array (
        'type' => 'long',
      ),
      'dest_id_poi_design_styles' => 
      array (
        'type' => 'long',
      ),
    ),
  ),
);