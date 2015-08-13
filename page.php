<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tx-zeroo
 */

get_header(); ?>

	<div class="image-featured">
		<?php
			// check if the post has a Post Thumbnail assigned to it.
			if ( has_post_thumbnail() ) {
				the_post_thumbnail( '', array( 'itemprop' => 'image') );
			}
		?>
	</div>

	<div class="container">
		<main id="main" class="row" role="main">
			<div id="mainbody" class="col-md-8 col-md-offset-2">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // End of the loop. ?>

			</div><!-- #primary -->

		</main><!-- #main -->
	</div><!-- Container -->

<?php get_footer(); ?>
