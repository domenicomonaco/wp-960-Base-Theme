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
<?php get_header(); ?>

<?php if (have_posts()) : ?>


<?php while (have_posts()) : the_post(); ?>
<div class="box articles">
<div class="block" id="articles">
	<div class="article">
		<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
		<h4><?php the_time('d.m.y') ?><img src="<?php bloginfo('template_directory'); ?>/i/row_data.jpg" /></h4>

		<div class="postmetadata">Categorie: <?php the_category(', ') ?> | Tags:<?php the_tags('<br />Tags: ', ', ', ''); ?></div>
		<div class="entry"><?php the_content(); ?></div>
		<h4 class="add_comment"><?php comments_popup_link('Aggiungi un commento ', '1 Commento presente ', '% Commenti presenti '); ?></h4>
	</div>
</div>
</div>
<?php endwhile; ?>


<div class="navigation">	<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
		<div class="alignleft"><?php next_posts_link('&laquo; Vecchie Voci') ?></div>
		<div class="alignright"><?php previous_posts_link('Nuove Voci &raquo;') ?></div>
	<?php } ?>
</div>

<?php else : ?>
	<h2>Non trovato</h2>
	<p>Spiacenti, ma stai cercando qualcosa che non raggiungibile, potrebbe essere stato eliminato o spostato. <br /><h3>Prova ad effettuare una ricaerca.</h3><br />
		<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
		<input type="text" name="s" id="s" value="Inserisci testo" onfocus="document.forms['searchform'].s.value='';" onblur="if (document.forms['searchform'].s.value == '') document.forms['searchform'].s.value='Search Keywords';" /><input type="submit" id="searchsubmit" value="Cerca" /></form>
	</ p>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
