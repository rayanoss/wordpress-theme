<?php get_header() ?>
 
<div class="container">
  <h1 class="page-title">
    <?php if (is_category()): ?>
      <?php single_cat_title()?>
    <?php elseif (is_search()): ?>
      <?= sprintf(__('Search results for "%s"', 'agencia'), get_search_query()); ?>
    <?php else: ?>
      <?php single_post_title()?>
    <?php endif ?>
  </h1>

    <div class="page-sidebar">
      <div>
        <div class="news-list">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()): the_post(); ?>
            <?php get_template_part('template-parts/post'); ?>
        <?php endwhile ?>
          
          <div class="pagination">
            <?= agencia_paginate() ?>
          </div>
        
          <?php else : ?>
                <h2><?= __('No posts found', 'agencia') ?></h2>
            <?php endif ?>
        </div>
      </div>

      <aside class="sidebar">
       <?php 
       get_search_form(); 
       dynamic_sidebar('blog'); 
       ?> 
</aside>

    </div>
  </div>


<?php get_footer(); ?>