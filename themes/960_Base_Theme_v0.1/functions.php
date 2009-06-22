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
		'name' => 'Footer Sidebar 0',
		'before_widget' => '<div id="%1$s" class="widget-footer %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	register_sidebar(array(
		'name' => 'Footer Sidebar 1',
		'before_widget' => '<div id="%1$s" class="widget-footer %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	register_sidebar(array(
		'name' => 'Footer Sidebar 2',
		'before_widget' => '<div id="%1$s" class="widget-footer %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	register_sidebar(array(
		'name' => 'Header Region 0',
		'before_widget' => '<div id="%1$s" class="widget-header %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
?>
