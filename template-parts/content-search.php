<?php
/**
 * Template part for displaying search
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bulmapress
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('wrapper'); ?>>
	<div class="container content">
		<header class="entry-header">
			<?php bulmapress_the_title('is-3'); ?>
			<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<small><?php bulmapress_posted_on(); ?>
					<footer class="entry-footer">
						<?php bulmapress_entry_footer(); ?>
					</footer></small><br><!-- .entry-footer -->
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
	</div>
</article><!-- #post-## -->
