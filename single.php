<?php get_header(); ?>

<div class="container page-sidebar">
  <?php while (have_posts()) : the_post(); ?>
    <main>
      <header class="news-single__header">
        <div class="news-single__title"><?php the_title() ?></div>
        <div class="news-single__meta">
          <?php
          $categories = get_the_category();
          if (!empty($categories)) : ?>
            <a class="news__tag" href="<?= get_term_link($categories[0]) ?>"><?= $categories[0]->name ?></a>
          <?php endif; ?>
          <div class="news__date"><?= sprintf(__('Published at %s', 'agencia'), get_the_date()) ?></div>
        </div>
      </header>
      <div class="formatted">
        <?php if (has_post_thumbnail()) : ?>
          <p>
            <?= the_post_thumbnail('large') ?>
          </p>
        <?php endif; ?>
        <?php the_content(); ?>
      </div>

      <?php
      if (comments_open() || absint(get_comments_number()) > 0) {
        comments_template();
      }
      ?>
      <div class="comments">
        <div class="comments__title">10 commentaires</div>

        <div class="comments__list">

          <div class="comment">
            <img alt="" src="https://secure.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=120&amp;r=g" class="comment__avatar" height="120" width="120">
            <div class="comment__body">
              <footer>
                <div class="comment__username">A WordPress Commenter</div>
                <div class="comment__date">October 23, 2019 at 11:51 am</div>
              </footer>
              <div class="comment__content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur delectus necessitatibus officiis.
                  Accusantium autem dolorem est id inventore laudantium molestias, nulla pariatur perspiciatis provident, quia
                  reiciendis rem sapiente tempore, veniam.
                </p>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque culpa deleniti dicta dolores esse,
                  incidunt magnam molestiae nam natus non pariatur placeat quas quasi quisquam quo sapiente suscipit
                  voluptatum!
                </p>
              </div>
            </div>
          </div>

          <div class="comment">
            <img alt="" src="https://secure.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=120&amp;r=g" class="comment__avatar" height="120" width="120">
            <div class="comment__body">
              <footer>
                <div class="comment__username">A WordPress Commenter</div>
                <div class="comment__date">October 23, 2019 at 11:51 am</div>
              </footer>
              <div class="comment__content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur delectus necessitatibus officiis.
                  Accusantium autem dolorem est id inventore laudantium molestias, nulla pariatur perspiciatis provident, quia
                  reiciendis rem sapiente tempore, veniam.
                </p>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque culpa deleniti dicta dolores esse,
                  incidunt magnam molestiae nam natus non pariatur placeat quas quasi quisquam quo sapiente suscipit
                  voluptatum!
                </p>
              </div>
            </div>
          </div>

          <div class="comment">
            <img alt="" src="https://secure.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=120&amp;r=g" class="comment__avatar" height="120" width="120">
            <div class="comment__body">
              <footer>
                <div class="comment__username">A WordPress Commenter</div>
                <div class="comment__date">October 23, 2019 at 11:51 am</div>
              </footer>
              <div class="comment__content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur delectus necessitatibus officiis.
                  Accusantium autem dolorem est id inventore laudantium molestias, nulla pariatur perspiciatis provident, quia
                  reiciendis rem sapiente tempore, veniam.
                </p>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque culpa deleniti dicta dolores esse,
                  incidunt magnam molestiae nam natus non pariatur placeat quas quasi quisquam quo sapiente suscipit
                  voluptatum!
                </p>
              </div>
            </div>
          </div>

          <div class="comment">
            <img alt="" src="https://secure.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=120&amp;r=g" class="comment__avatar" height="120" width="120">
            <div class="comment__body">
              <footer>
                <div class="comment__username">A WordPress Commenter</div>
                <div class="comment__date">October 23, 2019 at 11:51 am</div>
              </footer>
              <div class="comment__content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur delectus necessitatibus officiis.
                  Accusantium autem dolorem est id inventore laudantium molestias, nulla pariatur perspiciatis provident, quia
                  reiciendis rem sapiente tempore, veniam.
                </p>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque culpa deleniti dicta dolores esse,
                  incidunt magnam molestiae nam natus non pariatur placeat quas quasi quisquam quo sapiente suscipit
                  voluptatum!
                </p>
              </div>
            </div>
          </div>

          <div class="comment">
            <img alt="" src="https://secure.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=120&amp;r=g" class="comment__avatar" height="120" width="120">
            <div class="comment__body">
              <footer>
                <div class="comment__username">A WordPress Commenter</div>
                <div class="comment__date">October 23, 2019 at 11:51 am</div>
              </footer>
              <div class="comment__content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur delectus necessitatibus officiis.
                  Accusantium autem dolorem est id inventore laudantium molestias, nulla pariatur perspiciatis provident, quia
                  reiciendis rem sapiente tempore, veniam.
                </p>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque culpa deleniti dicta dolores esse,
                  incidunt magnam molestiae nam natus non pariatur placeat quas quasi quisquam quo sapiente suscipit
                  voluptatum!
                </p>
              </div>
            </div>
          </div>

        </div>

        <div class="comments__title">Laissez un commentaire</div>
        <form action="" class="form-2column">
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

      </div>


    </main>
  <?php endwhile; ?>
  <aside class="sidebar">
    <?php dynamic_sidebar('blog') ?>
  </aside>

</div>

<?php get_footer(); ?>