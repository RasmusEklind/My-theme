<section class="section section--projects">
  <div class="divider-container divider--projects">
  <?php get_template_part('partials/divider-svg'); ?>
</div>
<div class="section__content section__content--projects">
  <h2 class="section__heading">Projects</h2>
        <?php
        $posts = get_posts(array('category' => 1, 'posts_per_page' => 5));
        foreach ($posts as $post) :
        setup_postdata($post); ?>
          <article class="article-teaser article-teaser--projects">
            <header class="article-teaser__header">
              <a class="no-border" href="<?php echo the_permalink(); ?>">
              <?php
              $image_classes = 'article-teaser__featured article-teaser__featured-projects';

              if (has_post_thumbnail()) {
                the_post_thumbnail('large', array('class' => $image_classes));
              } else {
                echo wp_get_attachment_image(206, 'large', false, array('class' => $image_classes));
              }
              ?>
              </a>

              <h3 class="article-teaser__title article-teaser__title--projects"><a class="article-teaser__link" href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
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
