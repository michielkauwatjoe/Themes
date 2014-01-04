<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
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

<style type="text/css" media="screen">

#header-masthead {
	position: relative;
	z-index: -2;
	background-image: url('/wp-content/themes/michielkauwatjoe/images/sahasrara-chakra-masthead.png');
	width: 720px;
	height: 288px;
}

</style>

<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/wp-content/themes/michielkauwatjoe/images/favicon.ico" >
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link href="http://cloud.webtype.com/css/c4c4890e-3491-4fa4-b9e0-03076bc86034.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<link rel="openid.server" href="http://www.myopenid.com/server" />
<link rel="openid.delegate" href="http://michielkauwatjoe.myopenid.com/" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page">

<div id="fixedheader">
<div id="header-masthead">
<div id="header-bg">
<div id="header" role="banner">
<div id="logo">
</div></div>
</div>
</div>
</div>


<div id="maincontent">
<div id="mainmenu">
<ul>
<?php jquery_drop_down_menu('Blog') ?>
</ul>
</div>
