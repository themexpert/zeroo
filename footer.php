<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tx-zeroo
 */

?>
	<footer id="footer" class="text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>
						<?php printf( esc_html__( 'Zeroo &copy; 2015, All Rights Reserved', 'tx-zeroo' ), 'WordPress' ); ?>
						<span class="sep"> | </span>
						<?php echo __('Designed &amp; developed by <a href="' .  get_site_url() . '" rel="designer" target="_blank">ThemeXpert</a>'); ?>
					</p>					
				</div>
			</div>
		</div>
	</footer><!-- #footer -->
	<?php get_sidebar(); ?>
	
<?php wp_footer(); ?>

</body>
</html>
