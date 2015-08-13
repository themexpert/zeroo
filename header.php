<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tx-zeroo
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="header" class="site-header" role="banner" data-spy="affix" data-offset-top="180">

		<nav class="navbar navbar-default" id="main-navigation">
			<div class="container">
				<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			    </button>

				<?php if ( get_theme_mod( 'upload_logo' ) ) : ?>
		        	<a class="navbar-brand logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'upload_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
		        <?php else : ?>
		        	<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) );?>"><?php bloginfo( 'name' ); ?></a>
		        <?php endif; ?>
				</div>
				
				<div class="collapse navbar-collapse" id="main-nav-collapse">
			    	<span class="glyphicon navbar-right sidebar-toggle hidden-xs hidden-sm"></span>
				    <!-- Collect the nav links, forms, and other content for toggling -->	    	
			    	<?php wp_nav_menu( array('container' => false, 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav navbar-right' ) ); ?>

		    	</div>
		    </div>
		</nav>

		<!-- <div class="jumbotron text-center">
			<div class="container">				
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<p class="site-description"><?php bloginfo( 'description' ); ?></p>
			</div>
		</div> --><!-- .site-branding -->

		<!-- <div class="container-fluid">
			<div class="row">				
				
			</div>			
		
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'tx-zeroo' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>#site-navigation
		
		
		</div> -->
	</header><!-- #header -->
		

	

	
