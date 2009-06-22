<?php
/*   
Theme Name: 960 Base Theme
Theme URI: http://960basetheme.kiuz.it
Description: Wordpress theme based on 960 Grid System
Author: Domenico Monaco
Author URI: http://www.kiuz.it
Version: 0.1
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
	<span class="link-top"><?php wp_loginout(); ?> &middot; <?php wp_register();?> <? wp_signon(); ?></span>	
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

	<div id="suckerfish-menu">
      <?php # suckerfish(); ?> <!-- if you use "suckerfish" menu plugin can uncomment this -->
	</div><!-- END suhkerfish-menu -->

</div><!-- END header -->





<div class="clear"></div>
			<div class="grid_16">
				<h2 id="page-heading">Templates for Rapid Interactive Prototyping</h2>
			</div>
			<div class="clear"></div>
			<div class="grid_4">
				<div class="box">
					<h2>Design Process</h2>
					<div class="block">
						<p>Design is based on the inspiration of past accomplishments. On that foundation, we can build upon those achievements to shape the future. Design is about life — past, present and future — and the learning process that happens between birth and death. It is about community and shared knowledge and experience. It is the passion to build on what we've learned to create something better.</p>
					</div>
				</div>
			</div>
			<div class="grid_4">
				<div class="box">
					<h2>Design Influences</h2>
					<div class="block">
						<p>The words "design influences" can be understood as both a plural noun and as subject and verb. The plural noun speaks of those who have come before us and paved the way. The verb speaks of the responsibility of design to lead the way. By understanding where we have come from, we have a better idea of where we are going and, perhaps, where we should be heading.</p>
					</div>
				</div>
			</div>
			<div class="grid_4">
				<div class="box">
					<h2>Inspiration</h2>
					<div class="block">
						<p>I have been inspired by the work of many who have pioneered advances in Web Standards, including 
				<a href="http://www.31three.com/" title="www.31three.com">Jesse Bennett-Chamberlain</a>, 
				<a href="http://www.stopdesign.com/" title="www.stopdesign.com">Douglas Bowman</a>, 
				<a href="http://www.chaoticpattern.com/" title="www.chaoticpattern.com">Allen Chang</a>, 
				<a href="http://www.stuffandnonsense.co.uk/" title="www.stuffandnonsense.co.uk">Andy Clarke</a>, 
				<a href="http://www.hicksdesign.co.uk/" title="www.hicksdesign.co.uk">Jon Hicks</a>, 
				<a href="http://www.shauninman.com/" title="www.shauninman.com">Shaun Inman</a>, 
				<a href="http://www.cameronmoll.com/" title="www.cameronmoll.com">Cameron Moll</a>, 
				<a href="http://veerle.duoh.com/" title="veerle.duoh.com">Veerle Pieters</a>, 
				<a href="http://www.jasonsantamaria.com/" title="www.jasonsantamaria.com">Jason Santa Maria</a>, 
				<a href="http://www.mezzoblue.com/" title="www.mezzoblue.com">Dave Shea</a>, 
				<a href="http://www.thebignoob.com/" title="www.thebignoob.com">Ryan Sims</a>, 
				<a href="http://www.sonspring.com/" title="www.sonspring.com">Nathan Smith</a>, and 
				<a href="http://www.zeldman.com/" title="www.zeldman.com">Jeffrey Zeldman</a>, 
				to name a few. Thank you for inspiring <a href="http://www.domain7.com/WhoWeAre/StephenBau.html" title="Stephen Bau, Designer, Domain7">me</a> to give something back.</p>
					</div>
				</div>
			</div>
			<div class="grid_4">
				<div class="box">
					<h2>Contribution</h2>
					<div class="block">
						<p>The <a href="/fluid960gs/">Fluid 960 Grid System</a> templates have been built upon the work of Nathan Smith and his <a href="http://960.gs/">960 Grid System</a> using effects from the <a href="http://mootools.net/">MooTools</a> and <a href="http://jquery.com/">jQuery</a>  JavaScript libraries. 
			 The idea for building these templates was inspired by Andy Clarke, author of <a href="http://www.transcendingcss.com/">Transcending CSS</a>, who advocates a content-out approach to rapid interactive prototyping, crediting Jason Santa Maria with the <a href="http://www.jasonsantamaria.com/archive/2004/05/24/grey_box_method.php">grey box method</a>.</p>
					</div>
				</div>
			</div>
			<div class="clear"></div>





<div id="container">
	<div id="content" class="grid_10">