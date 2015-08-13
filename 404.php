<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package tx-zeroo
 */

get_header(); ?>
	
	<?php tx_zeroo_admin_header_image();?>

	<main id="main" class="row" role="main">
			<div id="mainbody" class="col-md-8 col-md-offset-2">
				<section class="error-404 not-found">
					<header class="text-center">
						<h1>404!</h1>
						<h3><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'tx-zeroo' ); ?></h3>
						<p><?php esc_html_e( 'Looks like the page you are trying to visit does not exist. Please check the URL and try your luck again.', 'tx-zeroo' ); ?></p>
					</header><!-- .page-header -->
				</section><!-- .error-404 -->
			</div>

		</main><!-- #main -->
	</div><!-- Container -->

<?php get_footer(); ?>
