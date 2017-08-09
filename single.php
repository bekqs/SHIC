<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bulmapress
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main wrapper" role="main">
		<div class"container">
			<div class="columns is-multiline">
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="column is-two-thirds">
					<?php get_template_part( 'template-parts/content', 'post' ); ?>
					<div class="section">
						<div class="container is-narrow">
							<?php the_post_navigation();?>
							<?php bulmapress_get_comments(); ?>
						</div>
					</div>
				</div>
				<div class="column">
					<?php get_sidebar(); ?>
				</div>
			<?php endwhile; ?>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
