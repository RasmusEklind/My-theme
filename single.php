<?php get_header(); ?>
	<main role="main">
	<section>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<article class="single__article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>

				<div class="single__article--thumbnail" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</div>

			<?php endif; ?>

			<h1 class="single__article article__title">
				<a class="single__article article__title--link" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>

			<div class="single--post author__block">
			<span class="single__post author__block--date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<span class="single__post author__block--author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			</div>

			<div class="single__article--content">
				<?php the_content();?>
			</div>
		</article>

	<?php endwhile; ?>
	<?php else: ?>

		<article>
			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
		</article>

	<?php endif; ?>

	</section>
	</main>

<?php get_footer(); ?>
