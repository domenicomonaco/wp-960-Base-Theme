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

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post">
			<h2><span class="data_t"><?php the_time('d.m.y') ?> </span><img src="<?php bloginfo('template_directory'); ?>/i/row_data.jpg" /> <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            
			<div class="postmetadata">Categorie: <?php the_category(', ') ?> | Tags:<?php the_tags('<br />Tags: ', ', ', ''); ?></div>
			<div class="entry">
				  <?php the_content(); ?>
				</div>
				<?php edit_post_link('Edit', '<p>', '</p>'); ?>
			</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<h2>Not Found</h2>
		<p>Spiacenti, ma stai cercando qualcosa che non raggiungibile, potrebbe essere stato eliminato o spostato. <br /><h3>Prova ad effettuare una ricaerca.</h3>
        <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/"><input type="text" name="s" id="s" value="Inserisci testo" onfocus="document.forms['searchform'].s.value='';" onblur="if (document.forms['searchform'].s.value == '') document.forms['searchform'].s.value='Search Keywords';" /><input type="submit" id="searchsubmit" value="Cerca" /></form><br />
        </p>

<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
