<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tx-zeroo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="image">
		<div class="image-inner">
			<?php 
				// check if the post has a Post Thumbnail assigned to it.
				if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				}
			?>
		</div>
	</div>	

	<div class="post-details">		
		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<small><?php tx_zeroo_posted_on(); ?></small>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php intro_text(30); ?><br>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<a href="<?php the_permalink(); ?>" class="btn btn-primary"><small><?php echo esc_html__('Read more', 'tx-zeroo'); ?></small></a>
			<small><?php tx_zeroo_entry_footer(); ?></small>
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->
