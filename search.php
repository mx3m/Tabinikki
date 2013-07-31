<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<h2 class="page-title"><?php _e('Search Results','tabinikki'); ?></h2>

		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

				<h3 class="time-author"><time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('F jS, Y') ?></time><?php _e(' in','typesense'); ?> <?php the_category(', ') ?>
			 | <?php comments_popup_link(__('No Comments &#187;','tabinikki'), __('1 Comment &#187;','tabinikki'), __('% Comments &#187;','tabinikki')); ?></h3>

				<div class="entry-content">

					<?php the_excerpt(); ?>

				</div>

			</article>

		<?php endwhile; ?>

		<?php post_navigation(); ?>

	<?php else : ?>

		<h2><?php _e('Nothing Found','tabinikki'); ?></h2>

	<?php endif; ?>

<?php get_footer(); ?>
