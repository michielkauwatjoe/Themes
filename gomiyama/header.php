<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
/**
 * Header Template
 *
 * Here we setup all logic and XHTML that is required for the header section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */
 
 global $woo_options, $woocommerce;
 
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="<?php if ( $woo_options['woo_boxed_layout'] == 'true' ) echo 'boxed'; ?> <?php if (!class_exists('woocommerce')) echo 'woocommerce-deactivated'; ?>">
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php woo_title(''); ?></title>
<?php woo_meta(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="screen" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	wp_head();
	woo_head();
?>

</head>

<body <?php body_class(); ?>>
<?php woo_top(); ?>

<div id="wrapper">

	
	<div id="top">
		<div id="logo">
		<a href="/"><img src="http://bucket.gomiyama.com.s3.amazonaws.com/wp-content/uploads/logo.png"/></a>
		</div>
		<nav class="cart" role="navigation">
			<?php if ( function_exists( 'has_nav_menu' ) && has_nav_menu( 'top-menu' ) ) { ?>
			<?php wp_nav_menu( array( 'depth' => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_id' => 'top-nav', 'menu_class' => 'nav fl', 'theme_location' => 'top-menu' ) ); ?>
			<?php } ?>
			<?php
				if ( class_exists( 'woocommerce' ) ) { 
					echo '<ul class="nav wc-nav">';
					echo '<li class="cart">'.current(woocommerce_cart_link()).'</li>';
					echo '<li class="checkout"><a href="'.esc_url($woocommerce->cart->get_checkout_url()).'">'.__('Checkout','woothemes').'</a></li>';
					echo get_search_form();
					echo '</ul>';
				}
			?>
		</nav>
	</div><!-- /#top -->

   
    
    <?php woo_header_before(); ?>

	<header id="header" >
	    <hgroup>
		<h3 class="nav-toggle"><a href="#navigation">MENU<span><?php _e('Navigation', 'woothemes'); ?></span></a></h3>
		      	
		</hgroup>
        
        <?php woo_nav_before(); ?>

		<!--div id="sliderbox">
		<div id="slideroverlay"></div>
		</div-->

		<div id="navigation" role="navigation">
			
			<?php
			if ( function_exists( 'has_nav_menu' ) && has_nav_menu( 'primary-menu' ) ) {
				wp_nav_menu( array( 'depth' => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_id' => 'main-nav', 'menu_class' => 'nav fr', 'theme_location' => 'primary-menu' ) );
			} else {
			?>
	        <ul id="main-nav" class="nav fl">
				<?php wp_list_pages( 'sort_column=menu_order&depth=6&title_li=&exclude=' ); ?>
			</ul>
	        <?php } ?>

			<!--div id="featured-products">
			<h3>Featured Products</h3>
			<?php echo do_shortcode("[featured_products per_page='12' columns='4']"); ?>
			</div-->

	
		</div>
		
		<?php woo_nav_after(); ?>

	
	</header>


	<?php woo_content_before(); ?>
