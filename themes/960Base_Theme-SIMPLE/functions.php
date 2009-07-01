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
<?php

if ( function_exists('register_sidebar') ){

register_sidebar(array(
		'name' => 'Header Region 0',
		'before_widget' => '<div id="%1$s" class="widget-header %2$s"><div class="box">',
		'after_widget' => '</div></div></div>',
		'before_title' => '<h2><a href="#">',
		'after_title' => '</a></h2><div>'
		));

register_sidebar(array(
		'name' => 'Sidebar 1',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="box">',
		'after_widget' => '</div></div></div>',
		'before_title' => '<h2><a href="#">',
		'after_title' => '</a></h2><div>'
		));
	

register_sidebar(array(
		'name' => 'Content Region 0',
		'before_widget' => '<div id="%1$s" class="widget-content %2$s"><div class="box">',
		'after_widget' => '</div></div></div>',
		'before_title' => '<h2><a href="#">',
		'after_title' => '</a></h2><div>'
		));

register_sidebar(array(
		'name' => 'Footer Region 0',
		'before_widget' => '<div id="%1$s" class="widget-footer %2$s"><div class="box">',
		'after_widget' => '</div></div></div>',
		'before_title' => '<h2><a href="#">',
		'after_title' => '</a></h2><div>'
		));
	
register_sidebar(array(
		'name' => 'Footer Region 1',
		'before_widget' => '<div id="%1$s" class="widget-footer %2$s"><div class="box">',
		'after_widget' => '</div></div></div>',
		'before_title' => '<h2><a href="#">',
		'after_title' => '</a></h2><div>'
		));
	
register_sidebar(array(
		'name' => 'Footer Region 2',
		'before_widget' => '<div id="%1$s" class="idget-footer %2$s"><div class="box">',
		'after_widget' => '</div></div></div>',
		'before_title' => '<h2><a href="#">',
		'after_title' => '</a></h2><div>'
		));
	
register_sidebar(array(
		'name' => 'Footer Region 3',
		'before_widget' => '<div id="%1$s" class="idget-footer %2$s"><div class="box">',
		'after_widget' => '</div></div></div>',
		'before_title' => '<h2><a href="#">',
		'after_title' => '</a></h2><div>'
		));
	
}

// Add ID and CLASS attributes to the first <ul> occurence in wp_page_menu
function add_menuclass($ulclass) {
return preg_replace('/<ul>/', '<ul class="nav main">', $ulclass, 1);
}
add_filter('wp_page_menu','add_menuclass');
?>
