<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' ); 
	
	// Add the blog name.
	echo get_bloginfo( 'name' );
	
	
	if(!is_single()) { 
		if(of_get_option('md_header_logo_subtext')) { 
			echo " - ".of_get_option('md_header_logo_subtext'); 
			} 
	}
	
	/// CREATE DESCRIPTION
	if(is_single()) { 
		$post = $wp_query->post;
		$descrip = strip_tags($post->post_content);
		$descrip_more = '';
			if (strlen($descrip) > 155) {
				$descrip = substr($descrip,0,155);
				$descrip_more = ' ...';
			}
		$descrip = str_replace('"', '', $descrip);
		$descrip = str_replace("'", '', $descrip);
		$descripwords = preg_split('/[\n\r\t ]+/', $descrip, -1, PREG_SPLIT_NO_EMPTY);
		array_pop($descripwords);
		$descrip = implode(' ', $descripwords) . $descrip_more; 
	}else{ 
		$descrip = of_get_option('md_header_seo_description');
	}
	  ?></title>
	<meta name="description" content="<?php echo $descrip; ?>">
	<meta name="keywords" content="<?php echo of_get_option('md_header_seo_keywords'); ?>">
	<link href="http://cloud.webtype.com/css/c4c4890e-3491-4fa4-b9e0-03076bc86034.css" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="http://data.michielkauwatjoe.com.s3.amazonaws.com/gao.ico" >
    
	<meta name="author" content="drone.tv" />

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 
	<!-- CSS
  ================================================== -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri()?>/style_ie.css" />
	<![endif]-->
  
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri() ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri() ?>/images/apple-touch-icon-114x114.png">
        
	<!-- RSS
  ================================================== -->
  	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/rss">
  	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-18382769-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
    
    
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
    <!-- Head End
  ================================================== -->
    <?php wp_head(); ?>
    
</head>
 
 <body <?php body_class(); ?>>
	<img src="http://data.michielkauwatjoe.com.s3.amazonaws.com/header.jpg" class="header_image"/>
	<div class="container">
		<div class="sixteen columns">
            <div class="six columns alpha">
            <a href="#" class="button navbarbutton pull-right"><i class="menu-icon"></i></a>
				<?php 
                 if(of_get_option('md_header_logo')) { 
                    echo '<img src="'.of_get_option('md_header_logo').'" class="" >';
                 }elseif(of_get_option('md_header_logo_text')) {
                    echo '<a href="'.home_url().'" class="main-logo" title="drone">'.of_get_option('md_header_logo_text').'</a>';	
                 }else{
					echo '<a href="'.home_url().'" class="main-logo" title="drone">'.get_bloginfo('name').'</a>';
				 }
                 ?>
            </div>
    		<div class="ten columns omega header-right">
            	<div class="nav-div">
                <?php 
				$md_head_search = of_get_option('md_header_disable_search');
				$md_head_subtext = of_get_option('md_header_logo_subtext');
				if(!$md_head_search) : ?>
                <form action="<?php echo get_site_url()?>">
		<input type="text" name="s" class="medium" value=""><button type="submit"><i class='icon-search'></i></button>
                </form>
                <?php endif; ?>

                
				<?php 
					if($md_head_search) { 
						echo '<div style="margin-top:10px;">';
						wp_nav_menu(array(
                        'theme_location' => 'main_menu',
                        'container' => '',
                        'menu_class' => 'main-nav text-shadow',
                        'before' => '',
                        'fallback_cb' => ''
                    	));
					 	echo '</div>';
						$menushowed=1;
					 } 
				 ?>
                </div>
            </div>
            <br class="clear" />
            <div class="six columns alpha">
            </div>
            <?php if(!isset($menushowed)) { ?>
            <div class="ten columns omega header-right">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'main_menu',
                        'container' => '',
                        'menu_class' => 'main-nav text-shadow',
                        'before' => '',
                        'fallback_cb' => ''
                    ));
					?> 
            </div>
            <?php } ?>
            <br class="clear" />
			<hr class="headerbottom border-color" />
		</div>
        
    <div class="header_contact"></div>
    
