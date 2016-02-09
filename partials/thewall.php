<section class="section section--thewall">
  <div class="divider-container divider--thewall">
  <?php get_template_part('partials/divider-svg'); ?>
</div>
<div class="section__content section__content--thewall">
  <section class="section section--thewall">
  <div class="section__content section__content--thewall">
    <h2 class="section__heading">The wall</h2>
    <div class="section__heading--teaser">
      <?php get_template_part('partials/top-left-svg'); ?>
      <p class="paragraf">
        - Here I will post stuff that I come across that I find intressting,
        stuff that potentatilly could come of good use in future projects or just simply inspire me, and maybe you aswell.
      </p>
      <?php get_template_part('partials/bottom-right-svg'); ?>
    </div>
          <?php
          $posts = get_posts(array('category' => 2, 'posts_per_page' => 5));
          foreach ($posts as $post) :
          setup_postdata($post); ?>
            <article class="article-teaser article-teaser--project">
              <header class="article-teaser__header">
                <a class="no-border" href="<?php echo the_permalink(); ?>">
                <?php
                $image_classes = 'article-teaser__featured article-teaser__featured-thewall';

                if (has_post_thumbnail()) {
                  the_post_thumbnail('medium', array('class' => $image_classes));
                } else {
                  echo wp_get_attachment_image(206, 'medium', false, array('class' => $image_classes));
                }
                ?>
                </a>

                <h3 class="article-teaser__title article-teaser__title--thewall"><a class="article-teaser__link" href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
              </header>

              <section class="article-teaser__body">
                <?php
                if (has_excerpt()) {
                  echo the_excerpt();
                }
                ?>
              </section>
            </article>

          <?php
          endforeach;
          wp_reset_postdata();
          ?>
    </div>
  </section>

  </div>
</section>
