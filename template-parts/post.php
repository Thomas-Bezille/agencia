<article class="news">
  <?php if (has_post_thumbnail()) : ?>
    <a href="<?php the_permalink() ?>" title="<?= esc_attr(get_the_title()) ?>" class="news__image">
      <?php the_post_thumbnail() ?>
    </a>
  <?php else : ?>
    <a href="#">
      <img width="250" height="250" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mM8efxkPQAHlALar1bXwgAAAABJRU5ErkJggg==">
    </a>
  <?php endif; ?>
  <div class="news__body">
    <header class="news__header">
      <?php
      $categories = get_the_category();
      if (!empty($categories)) : ?>
        <a class="news__tag" href="<?= get_term_link($categories[0]) ?>"><?= $categories[0]->name ?></a>
      <?php endif; ?>
      <a class="news__title" href="<?php the_permalink() ?>"><?php the_title() ?></a>
      <div class="news__date"><?= sprintf(__('Published at %s', 'agencia'), get_the_date()) ?></div>
    </header>
    <div class="news__content">
      <?php the_excerpt() ?>
    </div>
    <a href="<?php the_permalink() ?>" class="news__action">
      Lire la suite
      <?= agencia_icon('arrow') ?>
    </a>
  </div>
</article>