<section class="section section--about">
  <div class="divider-container divider--about">
  <?php get_template_part('partials/divider-svg'); ?>
</div>
<div class="section__content section__content--about">
  <?php $post = get_post(9); ?>
    <h2 class="section__heading"><?php echo $post->post_title; ?></h2>
  <?php echo apply_filters('the_content', $post->post_content); ?>
</div>
</div>
</section>
