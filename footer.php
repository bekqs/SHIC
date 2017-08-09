<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bulmapress
 */
?>

</div><!-- #content -->

<footer class="footer" role="contentinfo">
	<div class="site-info">
		<div class="container">
			<div class="columns footer-low has-text-centered">
				<div class="column social-footer center-vertical">
					<span><b>FOLLOW US:</b></span>
					<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-tumblr" aria-hidden="true"></i></a>
				</div>
				<div class="column shic-id">
					<p>Registered in British Columbia as the Students for High Impact Charity Foundation <u>75152 2293 RC0001</u></p>
				</div>
				<div class="column center-vertical">
					<p class="copyright">
						Copyright <?php echo Date(Y); ?> &copy; <a href=""><b><?php bloginfo('name'); ?></b></a>
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>
<a href="#" class="go-top" style="display: inline;">TOP <i class="fa fa-caret-up" aria-hidden="true"></i></a>
</div>
<?php wp_footer(); ?>

</body>
</html>
