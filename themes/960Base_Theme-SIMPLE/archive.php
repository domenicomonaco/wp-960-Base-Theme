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
<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php if (is_category()) { ?>
		<h2 class="pagetitle">Archivio contenuti della categoria &#8216;<?php single_cat_title(); ?>&#8217;</h2>
 	  <?php } elseif( is_tag() ) { ?>
		<h2 class="pagetitle">Archivio contenuti con il tag &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php } elseif (is_day()) { ?>
		<h2 class="pagetitle">Archivio contenuti del <?php the_time('d/m/Y'); ?></h2>
	 	<?php } elseif (is_month()) { ?>
		<h2 class="pagetitle">Archivio contenuti di <?php the_time('M Y'); ?></h2>
		<?php } elseif (is_year()) { ?>
		<h2 class="pagetitle">Archivio contenuti del <?php the_time('Y'); ?></h2>
	  <?php } elseif (is_author()) { ?>
		<h2 class="pagetitle">Archivio autore</h2>
		<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Archivio Blog</h2>
		<?php } ?>

		<?php while (have_posts()) : the_post(); ?>

<div class="post post-front-page">
			<h2><span class="data_t"><?php the_time('d.m.y') ?> </span><img src="<?php bloginfo('template_directory'); ?>/i/row_data.jpg" /> <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            
			<div class="postmetadata">Categorie: <?php the_category(', ') ?> | Tags:<?php the_tags('<br />Tags: ', ', ', ''); ?></div>
			<div class="entry">
				<?php the_excerpt(); ?>
			</div>
            <h4 class="add_comment"><?php comments_popup_link('Aggiungi un commento ', '1 Commento presente ', '% Commenti presenti '); ?></h4>
		</div>
        
        
		<?php endwhile; ?>

  	<div class="navigation">
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
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
