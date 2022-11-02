<?php
/**
 * Plugin Name: Agence Plugin
 */
add_action('init', function(){
    register_post_type('property', [
        'label' => __('Property', 'agence'), 
        'menu_icon' => 'dashicons-admin-multisite', 
        'labels' => [
            'name'                  => __('Property', 'agence'),
            'singular_name'         => __('Property', 'agence'),
            'new_item'              => __('New property', 'agence'),
            'edit_item'             => __('Edit property', 'agence'),
            'view_item'             => __('View property', 'agence'),
            'all_items'             => __('All properties', 'agence'),
            'search_items'          => __('Search properties', 'agence'),
            'parent_item_colon'     => __('Property', 'agence'),
            'not_found'             => __('No properties found', 'agence'),
            'not_found_in_trash'    => __('No properties found in Trash', 'agence'),
            'archives'              => __('Property archives', 'agence'),
            'insert_into_item'      => __('Insert into property', 'agence'),
            'uploaded_to_this_item' => __('Uploaded to this property', 'agence'),
            'filter_items_list'     =>__('Filter properties list', 'agence'),
            'items_list_navigation' => __('Property list navigation', 'agence'),
            'items_list'            =>__('Property list', 'agence'),
        ], 
        'has_archive' => true, 
        'public' => true, 
        'hierarchical' => false, 
        'exclude_from_search' => false, 
        'taxonomies' => ['property_type', 'property_city', 'property_option'], 
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail', ]
        ]); 

        register_taxonomy('property_type', 'property', [
            'labels' => [
                'meta_box_cb' => 'post_categories_meta_box', 
                'name'                       => __('Types', 'agences'), 
                'singular_name'              => __('Type', 'agences'),
                'search_items'               => __('Search types', 'agences'),
                'popular_items'              => __('Popular types', 'agences'),
                'all_items'                  => __('All types', 'agences'),
                'parent_item'                => __('Parent category', 'agences'),
                'parent_item_colon'          => __('Parent category:', 'agences'),
                'edit_item'                  => __('Edit Type', 'agences'),
                'view_item'                  => __('View Type', 'agences'),
                'update_item'                => __('Update Type', 'agences'),
                'add_new_item'               => __('Add new Type', 'agences'),
                'new_item_name'              => __('New Type Name', 'agences'),
                'separate_items_with_commas' =>__('Separate Types with comas', 'agences'),
                'add_or_remove_items'        => __('Add or remove Types', 'agences'),
                'choose_from_most_used'      => __('Choose from the most used Types', 'agences'),
                'not_found'                  => __('No types found', 'agences'),
                'no_terms'                   =>__('No types', 'agences'),
                'items_list_navigation'      => __('Types list navigation', 'agences'), 
                'items_list'                 => __('Types list', 'agences'),
                /* translators: Tab heading when selecting from the most used terms. */
                'most_used'                  => __('Most Used Types', 'agences'), 
                'back_to_items'              => __('Back to Types', 'agences'),
            ]
            ]); 

            register_taxonomy('property_city', 'property', [
                'labels' => [
                    'meta_box_cb' => 'post_categories_meta_box', 
                    'name'                       => __('Cities', 'agences'), 
                    'singular_name'              => __('City', 'agences'),
                    'search_items'               => __('Search cities', 'agences'),
                    'popular_items'              => __('Popular cities', 'agences'),
                    'all_items'                  => __('All cities', 'agences'),
                    'parent_item'                => __('Parent category', 'agences'),
                    'parent_item_colon'          => __('Parent category:', 'agences'),
                    'edit_item'                  => __('Edit City', 'agences'),
                    'view_item'                  => __('View City', 'agences'),
                    'update_item'                => __('Update City', 'agences'),
                    'add_new_item'               => __('Add new Type', 'agences'),
                    'new_item_name'              => __('New City Name', 'agences'),
                    'separate_items_with_commas' =>__('Separate cities with comas', 'agences'),
                    'add_or_remove_items'        => __('Add or remove cities', 'agences'),
                    'choose_from_most_used'      => __('Choose from the most used cities', 'agences'),
                    'not_found'                  => __('No cities found', 'agences'),
                    'no_terms'                   =>__('No cities', 'agences'),
                    'items_list_navigation'      => __('cities list navigation', 'agences'), 
                    'items_list'                 => __('cities list', 'agences'),
                    /* translators: Tab heading when selecting from the most used terms. */
                    'most_used'                  => __('Most Used cities', 'agences'), 
                    'back_to_items'              => __('Back to cities', 'agences'),
                ]
                ]); 

                register_taxonomy('property_option', 'property', [
                    'labels' => [
                        'meta_box_cb' => 'post_categories_meta_box', 
                        'name'                       => __('options', 'agences'), 
                        'singular_name'              => __('option', 'agences'),
                        'search_items'               => __('Search options', 'agences'),
                        'popular_items'              => __('Popular options', 'agences'),
                        'all_items'                  => __('All options', 'agences'),
                        'parent_item'                => __('Parent category', 'agences'),
                        'parent_item_colon'          => __('Parent category:', 'agences'),
                        'edit_item'                  => __('Edit option', 'agences'),
                        'view_item'                  => __('View option', 'agences'),
                        'update_item'                => __('Update option', 'agences'),
                        'add_new_item'               => __('Add new Type', 'agences'),
                        'new_item_name'              => __('New option Name', 'agences'),
                        'separate_items_with_commas' =>__('Separate options with comas', 'agences'),
                        'add_or_remove_items'        => __('Add or remove options', 'agences'),
                        'choose_from_most_used'      => __('Choose from the most used options', 'agences'),
                        'not_found'                  => __('No options found', 'agences'),
                        'no_terms'                   =>__('No options', 'agences'),
                        'items_list_navigation'      => __('options list navigation', 'agences'), 
                        'items_list'                 => __('options list', 'agences'),
                        /* translators: Tab heading when selecting from the most used terms. */
                        'most_used'                  => __('Most Used options', 'agences'), 
                        'back_to_items'              => __('Back to options', 'agences'),
                    ]
                    ]); 
}); 

register_activation_hook(__FILE__, 'flush_rewrite_rules'); 
register_deactivation_hook(__FILE__, 'flush_rewrite_rules'); 

require_once('query.php'); 

function agence_city ($post = null) {
    $cities = get_the_terms($post, 'property_city'); 

    if (empty($cities)) {
        return; 
    }

    $city = $cities[0]; 

    echo $city->name; 
    $postalCode = get_field('postal_code', $city); 
    if ($postalCode) {
        echo ' (' . $postalCode . ')'; 
    }; 
}; 


function agence_price ($post = null) {
    if (get_field('property_category', $post) === 'buy'){
        echo get_field('price',  $post) . "$"; 
    }else{
        echo get_field('price',  $post) . '$/mo'; 
    }
}; 