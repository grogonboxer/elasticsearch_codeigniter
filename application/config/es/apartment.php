<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array (
    'id' => 'apt_id',
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
            'apt_id' => 
                array (
                    'type' => 'long',
                ),
            'apt_name' => 
                array (
                    'type' => 'text',
                ),
            'apt_image' => 
                array (
                    'type' => 'keyword',
                ),
            'paint_url' => 
                array (
                    'type' => 'keyword',
                ),
            'paint_poi_render_tasks' => 
                array (
                    'type' => 'long',
                ),
            'desc' => 
                array (
                    'type' => 'text',
                ),
            'apt_area' => 
                array (
                    'type' => 'double',
                ),
            'community_name' => 
                array (
                    'type' => 'text',
                ),
            'community_poi_communities' => 
                array (
                    'type' => 'long',
                ),
            'aptt_poi_apartment_types' => 
                array (
                    'type' => 'long',
                ),
            'is_shared' => 
                array (
                    'type' => 'long',
                ),
            'ftt_id_poi_furniture_top_type' => 
                array (
                    'type' => 'long',
                ),
            'apt_has_furniture' => 
                array (
                    'type' => 'long',
                ),
            'angle_offset' => 
                array (
                    'type' => 'double',
                ),
            'proportion' => 
                array (
                    'type' => 'double',
                ),
            'remark' => 
                array (
                    'type' => 'text',
                ),
            'com_id_poi_companys' => 
                array (
                    'type' => 'long',
                ),
            'dealer_id_poi_company_dealer' => 
                array (
                    'type' => 'long',
                ),
            'st_id_poi_company_stores' => 
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
            'order_id' => 
                array (
                    'type' => 'long',
                ),
            'switch_state' => 
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
            'client_user' => 
                array (
                    'type' => 'text',
                ),
            'client_tel' => 
                array (
                    'type' => 'keyword',
                ),
            'type' => 
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
            'aptt_id' => 
                array (
                    'type' => 'long',
                ),
            'ftt_id' => 
                array (
                    'type' => 'long',
                ),
            'community_id' => 
                array (
                    'type' => 'long',
                ),
            'estate_name' => 
                array (
                    'type' => 'text',
                ),
            'residential_name' => 
                array (
                    'type' => 'text',
                ),
            ),
        ),
    );