<?php
/*
 * Theme Name: 960 Base Theme
 * Theme URI: http://960basetheme.kiuz.it
 * Description: Wordpress theme based on 960 Grid System
 * Author: Domenico Monaco
 * Author URI: http://www.kiuz.it
 * Version: 0.1
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<!-- <link rel="shortcut icon" href="favicon.ico"><link rel="icon" type="image/gif" href="animated_favicon1.gif"> -->
	<!-- <meta name="verify-v1" content="XXXXXXXX" /> --> <!-- Google Meta tag for Web Master Tools -->
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php if (function_exists('seo_title_tag')) { seo_title_tag(); } else { bloginfo('name'); wp_title();} ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>

<body>

<div id="wrapper" class="container_16" >
<div id="top_bar" class="grid_16">
<!--	<span class="link-top"><?php wp_loginout(); ?> &middot; <?php wp_register();?> <? wp_signon(); ?></span>	-->
	<div id="head-region" class="header-widget">
		<?php	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header Region 0') ) : ?><?php endif; ?> 
	</div><!-- END head-widget -->
</div><!-- END top_bar -->

<div class="clear">&nbsp;</div>

<div id="header" class="grid_16">

	<div id="img-head">
	<h1 id="branding">
		<a href="">960 Base Theme | V 0.1</a>
	</h1>
		<p>&nbsp;</p>

	</div><!-- END img-head -->
</div><!-- END header -->


<div class="clear"></div>
<div id="navi" class ="grid_16">
<?php if(function_exists('wp_page_menu')) : ?>
	<?php wp_page_menu('show_home=Home&menu_class=navigation'); ?>
<?php else : ?>
	<div id="page-nav">
		<ul class="main nav">
			<?php wp_list_pages('title_li='); ?>
		</ul>
	</div>
<?php endif; ?>
</div><!-- END menu -->

<div class="grid_16">
<h2 id="page-heading">Simple, easy, clean, free and 960's compatible! </h2></div>
<div id="content_bar" class="grid_16">
<!--	<span class="link-top"><?php wp_loginout(); ?> &middot; <?php wp_register();?> <? wp_signon(); ?></span>	-->
	<div id="content-region" class="content-widget">
		<?php	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Content Region 0') ) : ?><?php endif; ?> 
	</div><!-- END head-widget -->
</div><!-- END top_bar -->


<div id="container">
	<div id="content" class="grid_11">
