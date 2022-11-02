<?php
add_filter('next_posts_link_attributes', function ($attrs) {
    return $attrs . 'class="btn"'; 
}); 

add_filter('nav_menu_css_class', function($classes, $item) {
    if (is_singular('property') || is_post_type_archive('property')){
        $classes = array_filter($classes, function($class) {
            return $class !== 'current_page_parent'; 
        }); 
    }

    return $classes; 
}, 10, 2);