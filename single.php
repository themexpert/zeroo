<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tx-zeroo
 */

get_header(); ?>

	<div class="image-featured">
		<?php
			// check if the post has a Post Thumbnail assigned to it.
			if ( has_post_thumbnail() ) {
				the_post_thumbnail( '', array( 'itemprop' => 'image') );
			}else {?>
				<img src="<?php header_image(); ?>" alt="">
			<?php } ?>
		?>
	</div>
	
	<div class="container">
		<main id="main" class="row" role="main">
			<div id="mainbody" class="col-md-8 col-md-offset-2">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'single' ); ?>

					<ul class="pager row">
						<li class="pull-left prev-post">
							<?php previous_post_link('%link'); ?> 
						</li>
						<li class="pull-right next-post">
							<?php next_post_link('%link'); ?> 
						</li>
					</ul>

					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // End of the loop. ?>
			</div>
				
		</main><!-- #main -->

	</div><!-- Container -->


<?php get_footer(); ?>
