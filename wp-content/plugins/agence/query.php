<?php

add_filter('query_vars', function($params) {
    $params[] = 'property_category'; 
    $params[] = 'city'; 
    $params[] = 'price'; 
    $params[] = 'property_type'; 
    $params[] = 'rooms'; 
    return $params; 
}); 

add_action('pre_get_posts', function($query) {
    if(is_admin() || !$query->is_main_query() || !is_post_type_archive('property')){
        return; 
    }; 

    $values = ['buy', 'rent']; 
    if(in_array(get_query_var('property_category'), $values)){
        $meta_query = $query->get('meta_query', []); 
        $meta_query[] = [
            'key' => 'property_category', 
            'value' => get_query_var('property_category')
        ]; 
        $query->set('meta_query', $meta_query); 
    }; 

    $city = get_query_var('city'); 
    if (get_query_var('city')) {
        $tax_query = $query->get('tax_query', []); 
        $tax_query[] = [
            'key' => 'property_city', 
            'terms' => $city, 
            'field' => 'slug'
        ]; 
        $query->set('tax_query', $tax_query); 
    }

    $price = (int)get_query_var('price'); 
    if ($price) {
        $meta_query = $query->get('meta_query', []); 
        $meta_query[] = [
            'key' => 'price', 
            'terms' => $price, 
            'compare' => '<=', 
            'type' => 'NUMERIC'
        ]; 
        $query->set('meta_query', $meta_query);    
    }

    $type = get_query_var('property_type'); 
    if ($type) {
        $tax_query = $query->get('tax_query', []); 
        $tax_query[] = [
            'key' => 'property_type', 
            'terms' => $type, 
            'field' => 'slug'
        ]; 
        $query->set('tax_query', $tax_query); 
    }

    $rooms = (int)get_query_var('rooms'); 
    if ($rooms) {
        $meta_query = $query->get('meta_query', []); 
        $meta_query[] = [
            'key' => 'rooms', 
            'terms' => $rooms, 
            'compare' => '>=', 
            'type' => 'NUMERIC'
        ]; 
        $query->set('meta_query', $meta_query);    
    }
}); 

add_action('init', function() {
    add_rewrite_rule('property/(buy|rent)/?$', 
    'index.php?post_type=property&property_category=$matches[1]', 
    'top'); 
}); 

add_filter('nav_menu_css_class', function($classes, $item) {

    if (is_post_type_archive('property')){
        global $wp; 
        if ($wp->request === trim($item->url, '/'));{
            $classes[] = 'current_page_parent'; 
        }
    }
    
        if (is_singular('property')){
            $property = get_queried_object(); 
            $category = get_field('property_category', $property); 

            if ($category === 'buy') {
                $condition = agence_is_buy_url($item->url); 
            }else{
                $condition = agence_is_rent_url($item->url);
            }
        }
        if ($condition) {
            $classes[] = 'current_page_parent'; 
        }
        return $classes; 
   
}, 11, 2);

function agence_is_rent_url($url){
    return strpos($url, 'property/rent'); 
}


function agence_is_buy_url($url){
    return strpos($url, 'property/rent'); 
}