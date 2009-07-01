<?php
/*
 * Theme Name: 960Base Theme SIMPLE
 * Theme URI: http://960basetheme.kiuz.it
 * Description: Wordpress theme based on 960 Grid System
 * Author: Domenico Monaco
 * Author URI: http://www.kiuz.it
 * Version: 1.0.0 BETA
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<!-- <link rel="shortcut icon" href="favicon.ico"><link rel="icon" type="image/gif" href="animated_favicon1.gif"> -->
	<!-- <meta name="verify-v1" content="XXXXXXXX" /> --> <!-- Google Meta tag for Web Master Tools -->
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php if (function_exists('seo_title_tag')) { seo_title_tag(); } else { bloginfo('name'); wp_title();} ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="alternate" type="text/xml" title="Comments RSS 2.0 feed" href="<?php bloginfo('comments_rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>

<body>

<div id="wrapper" class="container_16" >

<!-- Help Bar -->
<div class="box grid_16" style="padding:0;">
	<h2 style="margin:0"><a href="#" style="background-position:99.3% 50%" id="toggle-grid">Help links >></a></h2>
</div>

<div class="clear"></div>

<div id="grid">
	<div class="grid_10">
		<div class="box">
			<h2>// Licenses Info</h2>

			<div class="block" id="accordion"><div id="accordion">
			<h3 class="toggler atStart">Content of this site are licensed under < > </h3>
			<div class="element atStart">
			<h4>About License of Content</h4>
			<p>sns </p>

			</div>
			</div></div>

			<div class="block" id="accordion"><div id="accordion">
			<h3 class="toggler atStart">960 Base Theme is licensed under GPL/MIT licenses</h3>
			<div class="element atStart">
			<h4>About License of 960 Base Theme</h4>
			<p>sns </p>

			</div>
			</div></div>
		</div>
	</div>

	<div class="grid_3">
		<div class="box">
		<h2>// Account links</h2>
		<p></p>
		</div>
	</div>

	<div class="grid_3">
		<div class="box">
		<h2>// Feed RSS</h2>
		<p>
		<ul>
		<li><a href="<?php bloginfo('rdf_url'); ?>">RDF/RSS 1.0 feed</a></li>
		<li><a href="<?php bloginfo('rss_url'); ?>">RSS 0.92 feed</a></li>
		<li><a href="<?php bloginfo('rss2_url'); ?>">RSS 2.0 feed</a></li>
		<li><a href="<?php bloginfo('atom_url'); ?>">Atom feed</a></li>
		<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments RSS 2.0 feed</a></li>	
		</ul>
		</p>
		</div>
	</div>

<div class="clear"></div>

</div>
<!-- END Help Bar -->


	<div id="top_bar" class="grid_16">
		<div id="head-region" class="header-widget">
			<?php	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header Region 0') ) : ?><?php endif; ?> 
		</div><!-- END head-widget -->
	</div><!-- END top_bar -->

<div class="clear">&nbsp;</div>

	<div id="header" class="grid_16">
		<div id="img-head">
			<h1 id="branding"><a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a></h1>
			<p>&nbsp;</p>
		</div><!-- END img-head -->
	</div><!-- END header -->
<div class="clear"></div>

	<div id="navi" class ="grid_16">
		<?php if(function_exists('wp_page_menu')) : ?><?php wp_page_menu('show_home=Home&menu_class=navigation'); ?><?php else : ?>
		<div id="page-nav">
			<ul class="main nav">
				<?php wp_list_pages('title_li='); ?>
			</ul>
		</div>
		<?php endif; ?>
	</div><!-- END navi -->

	<div class="grid_16">
		<h2 id="page-heading"><?php bloginfo('description'); ?></h2>
	</div>

	<div id="content_bar" class="grid_16">
		<div id="content-region" class="content-widget">
			<?php	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Content Region 0') ) : ?><?php endif; ?> 
		</div><!-- END head-widget -->
	</div>

	<div id="container">
	<div id="content" class="grid_10">
