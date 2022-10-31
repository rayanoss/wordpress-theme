<?php
add_filter('comment_form_default_fields', function ($fields){
    $authorLabel = __('Name'); 
    $emailLabel = __('Email'); 
    $fields['author'] = <<<HTML
    <div class="form-group">
        <input type="text" id="author" name="author" class="form-control" required>
        <label for="author">{$authorLabel}</label>
    </div>
    HTML;

    $fields['email'] = <<<HTML
    <div class="form-group">
        <input type="email" id="email" name="email" class="form-control" required>
        <label for="email">{$emailLabel}</label>
    </div>
    HTML;
    
    unset($fields['url']); 
    return $fields; 
}); 

add_filter('comment_form_defaults', function ($fields){
    $commentLabel = _x('Comment', 'noun'); 
    $fields['comment_field'] = <<<HTML
    <textarea placeholder="{$commentLabel}" class="form-control full" required name="comment" id="comment"></textarea>
    HTML;
    return $fields; 
}); 

add_filter('comment_form_fields', function($fields){
    $newFields = []; 
    foreach($fields as $key => $value){
        if ($key !== 'comment'){
            if ($key === 'cookies'){
                $newFields['comment'] = $fields['comment']; 
            }
            $newFields[$key] = $value; 
        }
    }
    if (!isset($newFields['comment'])) {
        $newFields['comment'] = $fields['comment']; 
    }
    return $newFields; 
}); 