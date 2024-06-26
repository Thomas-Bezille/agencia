<?php get_header() ?>
<?php
$isRent = get_query_var('property_category', 'buy') === _x('rent', 'URL', 'agence');
  $cities = get_terms([
    'taxonomy' => 'property_city',
  ]);
  $types = get_terms([
    'taxonomy' => 'property_type',
  ]);
  $curentCity = get_query_var('city');
  $curentPrice = get_query_var('price');
  $currentType = get_query_var('property_type');
  $currentRooms = get_query_var('rooms');
?>

<div class="container page-properties">
  <div class="search-form">
    <h1 class="search-form__title">
      <?= __('All our properties', 'agencia') ?>
      <?php if($isRent): ?>
        <?= __('for rent', 'agencia') ?>
      <?php else: ?>
        <?= __('for sale', 'agencia') ?>
      <?php endif; ?>
    </h1>
    <hr>
    <form action="" class="search-form__form">
      <div class="form-group">
        <select name="city" id="city" class="form-control">
          <?php foreach($cities as $city): ?>
            <option value="<?= $city->slug ?>" <?php selected($city->slug, $curentCity) ?>><?= $city->name ?></option>
          <?php endforeach; ?>
        </select>
        <label for="city"><?= __('City', 'agencia') ?></label>
      </div>
      <div class="form-group">
        <input type="number" class="form-control" id="budget" placeholder="100 000 €" name="price" value="<?= esc_attr($curentPrice) ?>">
        <label for="budget"><?= __('Budget', 'agencia') ?></label>
      </div>
      <div class="form-group">
        <select name="property_type" id="property_type" class="form-control">
          <option value=""><?= __('All types', 'agencia') ?></option>
          <?php foreach($types as $type): ?>
            <option value="<?= $type->slug ?>" <?php selected($type->slug, $currentType) ?>><?= $type->name ?></option>
          <?php endforeach; ?>
        </select>
        <label for="property_type"><?= __('Type', 'agencia') ?></label>
      </div>
      <div class="form-group">
        <input type="number" class="form-control" name="rooms" id="rooms" placeholder="4" value="<?= esc_attr($currentRooms) ?>">
        <label for="rooms"><?= __('Rooms', 'agencia') ?></label>
      </div>
      <button type="submit" class="btn btn-filled"><?= __('Search', 'agencia') ?></button>
    </form>
  </div>

  <?php $i=0; while (have_posts()) : the_post(); ?>
    <a class="property <?php if ($i === 7) { echo 'property--large'; } ?>" href="<?php the_permalink() ?>" title="<?= esc_attr(get_the_title()) ?>">
      <div class="property__image">
        <?php the_post_thumbnail($i === 7 ? 'property-thumbnail-large' : 'property-thumbnail') ?>
      </div>
      <div class="property__body">
        <div class="property__location"><?php agence_city() ?></div>
        <h3 class="property__title"><?php the_title() ?> - <?php the_field('surface') ?>m²</h3>
        <div class="property__price"><?php agence_price() ?></div>
      </div>
    </a>
  <?php $i++; endwhile; ?>

</div>

<?php if(get_query_var('paged', 1) > 1): ?>
  <?= agencia_paginate() ?>
<?php elseif($nextPostLink = get_next_posts_link(__('More properties +', 'agencia'))): ?>
  <div class="pagination">
    <?= $nextPostLink ?>
  </div>
<?php endif; ?>


<?php get_footer() ?>