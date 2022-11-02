<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>
<div class="container">
<header class="bien-header">
      <div>
        <h1 class="bien__title"><?php the_title(); ?> - <?= the_field('surface') ?> m²</h1>
        <div class="bien__meta">
          <div class="bien__location"><?= agence_city(get_post()) ?> </div>
          <div class="bien__price">
        <?php if (get_field('property_category') === 'buy'): ?>
          <?= sprintf('%s $', get_field('price')) ?>
        <?php else: ?>
          <?= sprintf('%s $/mo', get_field('price')) ?>
        <?php endif ?>
        </div>
        </div>
        <div class="bien__actions">
          <button class="btn btn-filled">Contacter l'agence</button>
          <button class="btn">Appeler</button>
        </div>

        <!--
        <form action="" class="bien__form form-2column">
          <div class="form-group">
            <input type="text" id="username" class="form-control">
            <label for="username">Pseudo</label>
          </div>
          <div class="form-group">
            <input type="text" id="email" class="form-control">
            <label for="email">Email</label>
          </div>
          <textarea placeholder="Message" class="form-control full"></textarea>
          <button type="submit" class="btn">Commenter</button>
        </form>
        -->
           
      </div>
      <div>
        <div class="bien__photos js-slider">
          <?php foreach(get_attached_media('image', get_post()) as $image): ?>
            <a href="https://i.picsum.photos/id/41/1280/720.jpg">
              <img class="bien__photo" src="<?= wp_get_attachment_image_url($image->ID, 'property-carousel'); ?>" alt="">
            </a>
          <?php endforeach ?>
        </div>
      </div>
    </header>




    <div class="bien-body">
      <h2 class="bien-body__title"><?= __('Description', 'agencia'); ?></h2>
      <div class="formatted">
        <?php the_content(); ?>
      </div>
    </div>

    <section class="bien-options">
      <div class="bien-option"><img src="<?= get_template_directory_uri() ?> /assets/area.78237e19.svg" alt=""> Superficie: <?php the_field('surface') ?>m²</div>
      <div class="bien-option"><img src="<?= get_template_directory_uri() ?> /assets/rooms.b02e3d15.svg" alt=""> Nbr chambres: <?php the_field('floor'); ?></div>
      <div class="bien-option"><img src="<?= get_template_directory_uri() ?> /assets/elevator.e0bdbd67.svg" alt=""> Etage: <?php the_field('floor'); ?></div>
      <div class="bien-option"><img src="<?= get_template_directory_uri() ?> /assets/parking.bb37c0bc.svg" alt=""> Parking: Oui</div>
      <div class="bien-option"><img src="<?= get_template_directory_uri() ?> /assets/elevator-fill.117c4510.svg" alt=""> Ascenseur</div>
      <?php $option = get_the_terms(get_post(), 'property_option'); ?>
      <?php foreach($options as $option): ?>
        <div class="bien-option"><img src="<?= get_template_directory_uri() ?> /icons/" <?= $option->slug ?> alt=""> 
        <?= $option->name; ?>
        </div>
        <?php endforeach ?>
    </section>

</div>
<?php endwhile ?>

<?php get_footer(); ?>