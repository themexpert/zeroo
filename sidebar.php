<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tx-zeroo
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="sidebar" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>

	<div class="social-links">
		<?php
        // Social links
        $twitter    = esc_url( get_theme_mod( 'social_twitter' ) );
        $facebook   = esc_url( get_theme_mod( 'social_facebook' ) );
        $gplus      = esc_url( get_theme_mod( 'social_gplus' ) );
        $feedlink   = get_option('feed_link');
        $loginlink  = get_option( 'login_link');
        ?>
        <ul class="social-icons clearfix">
          <?php if( $twitter ) { ?>
          <li class="twitter"><a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <?php } ?>
          <?php if( $facebook ) { ?>
          <li class="facebook"><a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <?php } ?>
          <?php if(  $gplus ) { ?>
          <li class="gplus"><a href="<?php echo $gplus; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
          <?php } ?>
          <?php if( $feedlink ) { ?>
          <li class="rss"><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Rss','tx-zeroo') ?>"><i class="fa fa-rss"></i></a></li>
          <?php } ?>
          <?php if($loginlink ) { ?>
          <li class="login"><a href="<?php echo wp_login_url( get_permalink() ); ?>" title="<?php _e('Login','tx-zeroo') ?>"><i class="fa fa-user"></i></a></li>
          <?php } ?>
        </ul>
	</div>
</div><!-- #secondary -->
