<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package tx-zeroo
 */

get_header(); ?>
	
	<?php tx_zeroo_admin_header_image();?>
	
	<div class="container">
		<main id="main" class="row" role="main">
			<div id="mainbody" class="col-md-8">

				<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'tx-zeroo' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );
					?>

				<?php endwhile; ?>

				<?php 
					if (function_exists("wp_bs_pagination"))
					    {
					         //wp_bs_pagination($the_query->max_num_pages);
					         wp_bs_pagination();
					}
				?>

				<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>

			</div>
		</main><!-- #main -->		
	</div><!-- Container -->

<?php get_footer(); ?>
