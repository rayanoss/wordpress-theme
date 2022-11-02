<?php
require_once('inc/supports.php'); 
require_once('inc/assets.php'); 
require_once('inc/apparence.php'); 
require_once('inc/menus.php'); 
require_once('inc/style.php'); 
require_once('inc/images.php'); 
require_once('inc/query/posts.php'); 
require_once('inc/query/property.php'); 
require_once('inc/comments.php'); 

function agencia_icon($name) {
    $spriteUrl = get_template_directory_uri() . '/assets/sprite.14d9fd56.svg'; 
    return <<<HTML
     <svg class="icon">
          <use xlink:href="{$spriteUrl}#{$name}"></use>
        </svg>
    HTML; 
}

function agencia_paginate() {
    return '<div class="pagination">' .paginate_links(['prev_text' => agencia_icon('arrow'), 'next_text' => agencia_icon('arrow')])  . '</div>'; 
}


function agencia_paginate_comment() {
    echo '<div class="pagination">'; 
    paginate_comments_links(['prev_text' => agencia_icon('arrow'), 'next_text' => agencia_icon('arrow')]); 
    echo '</div>'; 
}