<section class="section section--about">
  <div class="divider-container divider--about">
  <?php get_template_part('partials/divider-svg'); ?>
</div>
<div class="section__content section__content--about">
  <?php $post = get_post(9); ?>
    <h2 class="section__heading"><?php echo $post->post_title; ?></h2>
    <div class="section__heading--teaser">
      <div class="featured__image--about">
      <?php
      $image_classes = 'article-teaser__featured article-teaser__featured-about';

      if (has_post_thumbnail()) {
        the_post_thumbnail('medium', array('class' => $image_classes));
      } else {
        echo wp_get_attachment_image(206, 'medium', false, array('class' => $image_classes));
      }
      ?>
    </div>
      <?php echo apply_filters('the_content', $post->post_content); ?>
    </div>
</div>
</div>
</section>
