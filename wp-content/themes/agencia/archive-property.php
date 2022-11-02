<?php get_header() ?>
<?php 
$type = get_query_var('property_category', 'buy'); 
$cities = get_terms([
  'taxonomy' => 'property_city'
]); 
$propertyType = get_terms([
  'taxonomy' => 'property_type'
]); 
$currentCity = get_query_var('city'); 
$currentPrice = get_query_var('price'); 
$currentType = get_query_var('property_type'); 
$currentRooms = get_query_var('rooms'); 
$currentCityFormat = get_term_by('slug', $currentCity, 'property_city');
?>

<div class="container page-properties">
    <div class="search-form">
  <h1 class="search-form__title">
    Tous nos biens à 
    <?php if ($type == 'buy'){echo 'à acheter'; }else{echo 'à louer';}; ?>
  </h1>
  <?php if($currentCity): ?>
  <p>Retrouver tous nos biens sur le secteur de <strong><?= esc_attr($currentCityFormat->name)  ?></strong></p>
  <?php endif; ?>
  <hr>
  <form action="" class="search-form__form">
    <div class="search-form__checkbox">
      <div class="form-check form-check-inline">
        <input class="form-check-input" <?php checked($type == 'buy'); ?> type="radio" name="property_category" id="buy" value="buy">
        <label class="form-check-label" for="buy">Acheter</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" <?php checked($type == 'rent'); ?> type="radio" name="property_category" id="rent" value="rent">
        <label class="form-check-label" for="rent">Louer</label>
      </div>
    </div>
    <div class="form-group">
    <select name="city" id="city" class="form-control">
        <?php foreach($cities as $city): ?>
          <option value="<?= $city->slug ?>" <?php selected($city->slug, $currentCity) ?>><?= $city->name ?></option>
        <?php endforeach;  ?>
      </select>
      <label for="city">Ville</label>
    </div>
    <div class="form-group">
      <input type="number" class="form-control" id="budget" placeholder="100 000 €" name="prcice" <?= esc_attr($currentPrice) ?>>
      <label for="budget">Prix max</label>
    </div>
    <div class="form-group">
      <select name="property_type" id="kind" class="form-control">
        <option value="">All type</option>
      <?php foreach($propertyType as $property): ?>
          <option value="<?= $property->slug ?>" <?php selected($property->slug, $currentType) ?>><?= $property->name ?></option>
        <?php endforeach;  ?>
      </select>
      <label for="property_type">Type</label>
    </div>
    <div class="form-group">
      <input type="number" name="rooms" class="form-control" id="rooms" placeholder="4" <?= esc_attr($currentRooms) ?>>
      <label for="rooms">Pièces</label>
    </div>
    <button type="submit" class="btn btn-filled">Rechercher</button>
  </form>
</div>

    
      
        
      <?php $i = 0; while(have_posts()): the_post();  ?>
      <?php set_query_var('property-large', $i === 7);  ?>
      <?php get_template_part('template-parts/property') ?>
      <?php $i++;  endwhile ?>

    
  </div>

  <div class="pagination">
    <?= get_next_posts_link(__("More properties +", 'agencia')) ?>
  </div>
<?php get_footer() ?>