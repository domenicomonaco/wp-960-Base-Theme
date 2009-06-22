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
	<meta name="verify-v1" content="ulBQ8gne8gdS0wIWH8F43wFlThaxEVBQjf6JFbh87ls=" />
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php if (function_exists('seo_title_tag')) { seo_title_tag(); } else { bloginfo('name'); wp_title();} ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>

<body>

<div id="wrapper">

	<div id="header">
    
<!-- TOP -->
<!-- LOGO -->		

<div id="img-head">
<!--<a href=""><img src="<?php bloginfo('template_directory'); ?>/i/hed-feed.jpg" alt="Segui gli articoli del sito" /></a>
<a href=""><img src="<?php bloginfo('template_directory'); ?>/i/hed-contact.jpg" alt="Contatta amministratore" /></a>-->
<p>&nbsp;</p>
</div>
<ul id="menu">
<li<?php if(is_home()) echo ' class="current_page_item"' ?>><a href="<?php bloginfo('url'); ?>/">Home</a></li>
<?php wp_list_pages("depth=1&title_li="); ?>
</ul>

<!--
<ul id="submenu">
<?php
if(!is_search()){
  if($post->post_parent)
  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
  else
  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
  if ($children) { ?>
  <ul>
<?php
$parent_title = get_the_title($post->post_parent);
echo $parent_title;
echo $children; ?>
</ul>
<?php }} ?>
</ul>-->

      
	</div><!-- end #header -->

	<div id="container">
		<div id="content">

<?php# get_header(); ?>

<h2>Pagina o contenuto inesistente!</h2>
<p>Spiacenti, ma stai cercando qualcosa che non è raggiungibile attraverso il presente indirizzo, potrebbe essere stato eliminato o spostato in una nuova locazione.

<br />
Per maggiori informazioni contatta l'amministratore e/o prova ad utilizzare gli strumenti messi a disposizione in questa pagina. 
<br />
<br />
Scusateci per l'incoveniente.
	<br /><br />
	<h3>Prova ad effettuare una ricaerca:</h3>
	<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/"><input type="text" name="s" id="s" value="Inserisci testo" onfocus="document.forms['searchform'].s.value='';" onblur="if (document.forms['searchform'].s.value == '') document.forms['searchform'].s.value='Search Keywords';" /><input type="submit" id="searchsubmit" value="Cerca" /></form><br />
        
	<h3>Cerca tra le categorie:</h3>
	<?php list_cats(); ?>
</p>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
