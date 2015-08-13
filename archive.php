<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tx-zeroo
 */

get_header(); ?>

	<?php tx_zeroo_admin_header_image();?>
	
	<div class="container">
		<main id="main" class="row" role="main">
			<div id="mainbody" class="col-md-8 col-md-offset-2">
				<?php if ( have_posts() ) : ?>

					<?php if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
					<?php endif; ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );
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
