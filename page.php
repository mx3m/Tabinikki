<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">

			<h2 class="page-title"><?php the_title(); ?></h2>

			<div class="entry-content">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => __('Pages: '), 'next_or_number' => 'number')); ?>

			</div>

			<?php edit_post_link(__('Edit this entry.'), '<p>', '</p>'); ?>

		</article>

		<?php endwhile; endif; ?>

<?php get_footer(); ?>
