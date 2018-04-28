<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array (
  'id' => 'community_id',
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
      'community_id' => 
      array (
        'type' => 'long',
      ),
      'community_name' => 
      array (
        'type' => 'text',
      ),
      'community_location' => 
      array (
        'type' => 'keyword',
      ),
      'province_poi_province' => 
      array (
        'type' => 'long',
      ),
      'city_poi_city' => 
      array (
        'type' => 'long',
      ),
      'district_poi_district' => 
      array (
        'type' => 'long',
      ),
      'house_type_num' => 
      array (
        'type' => 'long',
      ),
      'open_time' => 
      array (
        'type' => 'long',
      ),
      'open_price' => 
      array (
        'type' => 'double',
      ),
      'periods_num' => 
      array (
        'type' => 'keyword',
      ),
      'occupancy' => 
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
      'DistrictID' => 
      array (
        'type' => 'long',
      ),
      'CityID' => 
      array (
        'type' => 'long',
      ),
      'ProvinceID' => 
      array (
        'type' => 'long',
      ),
    ),
  ),
);