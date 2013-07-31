<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h1 class="entry-title"><?php the_title(); ?></h1>

			<h3 class="time-author"><time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('F jS, Y') ?></time><?php _e(' in','typesense'); ?> <?php the_category(', ') ?></h3>

			<div class="entry-content">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => __('Pages: '), 'next_or_number' => 'number')); ?>
				
				<?php the_tags( __('Tags: '), ', ', ''); ?>

			</div>
			
		</article>

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>