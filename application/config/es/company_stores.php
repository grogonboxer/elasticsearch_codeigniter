<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array (
  'id' => 'st_id',
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
      'st_id' => 
      array (
        'type' => 'long',
      ),
      'com_id_poi_companys' => 
      array (
        'type' => 'long',
      ),
      'dealer_id_poi_company_dealer' => 
      array (
        'type' => 'long',
      ),
      'st_image_url' => 
      array (
        'type' => 'keyword',
      ),
      'st_name' => 
      array (
        'type' => 'text',
      ),
      'st_owner' => 
      array (
        'type' => 'text',
      ),
      'st_owner_tel' => 
      array (
        'type' => 'keyword',
      ),
      'st_address' => 
      array (
        'type' => 'keyword',
      ),
      'st_tel' => 
      array (
        'type' => 'keyword',
      ),
      'st_position' => 
      array (
        'type' => 'keyword',
      ),
      'st_stores_num' => 
      array (
        'type' => 'keyword',
      ),
      'area' => 
      array (
        'type' => 'double',
      ),
      'opening_time' => 
      array (
        'type' => 'keyword',
      ),
      'st_create_date' => 
      array (
        'type' => 'keyword',
      ),
      'st_summer_time' => 
      array (
        'type' => 'keyword',
      ),
      'st_winter_time' => 
      array (
        'type' => 'keyword',
      ),
      'st_weekend_time' => 
      array (
        'type' => 'keyword',
      ),
      'st_summer_end_time' => 
      array (
        'type' => 'keyword',
      ),
      'st_winter_end_time' => 
      array (
        'type' => 'keyword',
      ),
      'st_weekend_end_time' => 
      array (
        'type' => 'keyword',
      ),
      'st_bus' => 
      array (
        'type' => 'keyword',
      ),
      'st_subway' => 
      array (
        'type' => 'keyword',
      ),
      'tenet' => 
      array (
        'type' => 'keyword',
      ),
      'park' => 
      array (
        'type' => 'keyword',
      ),
      'st_order' => 
      array (
        'type' => 'long',
      ),
      'brand_order' => 
      array (
        'type' => 'long',
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
      'st_intro' => 
      array (
        'type' => 'keyword',
      ),
      'st_area_id_poi_company_area' => 
      array (
        'type' => 'long',
      ),
      'st_stores_types_poi_company_stores_types' => 
      array (
        'type' => 'long',
      ),
      'st_stores_states_new' => 
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
      'st_stores_states' => 
      array (
        'type' => 'keyword',
      ),
      'com_area_id' => 
      array (
        'type' => 'long',
      ),
      'st_user_charge_id' => 
      array (
        'type' => 'keyword',
      ),
      'com_id' => 
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
      'DistrictID' => 
      array (
        'type' => 'long',
      ),
      'st_stores_types' => 
      array (
        'type' => 'long',
      ),
      'st_son_area_id' => 
      array (
        'type' => 'long',
      ),
      'st_large_area_id' => 
      array (
        'type' => 'long',
      ),
      'st_image' => 
      array (
        'type' => 'keyword',
      ),
    ),
  ),
);