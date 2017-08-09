<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bulmapress
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area hero is-light" role="complementary">
			<div class="column has-text-left">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div>
</aside><!-- #secondary -->
