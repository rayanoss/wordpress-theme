<?php 
require_once('inc/walkers/comment-walker.php'); 
$count = get_comments_number();?>
<div class="comments">
    <div class="comments__title">
        <?php if(get_comments_number() > 0): ?>
            <?= sprintf(_n('%d Comment', '%d Comments', $count), $count) ?>
        <?php else:  ?>
            <?= __('Leave a reply', 'agencia');  ?>
        <?php endif; ?>
    </div>

    <?php wp_list_comments(['style' => 'div', 'walker' => new AgenciaCommentWalker()]); ?>
    
    <?php agencia_paginate_comment() ?>

    <?php if(comments_open()):  ?>
            <?php comment_form(['title_reply' => '', 'class_form' => 'form-2column', 'class_submit' => 'btn']); ?>
    <?php endif ?>
</div>