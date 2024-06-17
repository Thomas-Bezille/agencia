<?php get_header() ?>

<div class="container">

  <h1 class="page-title"><?php single_post_title() ?></h1>

  <div class="page-sidebar">
    <div>
      <div class="news-list">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/post') ?>
          <?php endwhile; ?>

          <div class="pagination">
            <a href="news.html" class="page-numbers prev">
              <svg class="icon">
                <use xlink:href="sprite.14d9fd56.svg#arrow"></use>
              </svg>
            </a>
            <a href="news.html" class="page-numbers">1</a>
            <a href="news.html" class="page-numbers">2</a>
            <a href="news.html" class="page-numbers">3</a>
            <span class="page-numbers current" aria-current="page">4</span>
            <a href="news.html" class="page-numbers">5</a>
            <a href="news.html" class="page-numbers next">
              <svg class="icon">
                <use xlink:href="sprite.14d9fd56.svg#arrow"></use>
              </svg>
            </a>
          </div>

        <?php else : ?>
          <h2><?= __('No post found', 'agencia') ?></h2>
        <?php endif; ?>

      </div>
    </div>
    <aside class="sidebar">
      <?php dynamic_sidebar('blog') ?>
    </aside>

  </div>
</div>

<?php get_footer() ?>