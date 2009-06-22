<?php
/*
 * Theme Name: 960 Base Theme
 * Theme URI: http://960basetheme.kiuz.it
 * Description: Wordpress theme based on 960 Grid System
 * Author: Domenico Monaco
 * Author URI: http://www.kiuz.it
 * Version: 0.5
 */
?>
<?php

if ( function_exists('register_sidebar') )

	register_sidebar(array(
		'name' => 'Sidebar 1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	register_sidebar(array(
		'name' => 'Footer Sidebar 0.1',
		'before_widget' => '<div id="%1$s" class="box widget-footer %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	register_sidebar(array(
		'name' => 'Footer Sidebar 0.2',
		'before_widget' => '<div id="%1$s" class="box widget-footer %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	register_sidebar(array(
		'name' => 'Footer Sidebar 0.3',
		'before_widget' => '<div id="%1$s" class="box widget-footer %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
register_sidebar(array('name' => 'Footer Sidebar 0.4','before_widget' => '<div id="%1$s" class="box widget-footer %2$s">','after_widget' => '</div>','before_title' => '<h2>','after_title' => '</h2>',));
	
	register_sidebar(array(
		'name' => 'Header Region 0',
		'before_widget' => '<div id="%1$s" class="widget-header %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
register_sidebar(array('name' => 'Content Region 0','before_widget' => '<div id="%1$s" class="box widget-footer %2$s">','after_widget' => '</div>','before_title' => '<h2>','after_title' => '</h2>',));



// Add ID and CLASS attributes to the first <ul> occurence in wp_page_menu
function add_menuclass($ulclass) {
return preg_replace('/<ul>/', '<ul class="nav main">', $ulclass, 1);
}
add_filter('wp_page_menu','add_menuclass');
?>
