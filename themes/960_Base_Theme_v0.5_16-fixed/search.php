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

		<h2 class="pagetitle">Risultati della ricerca per "<?php the_search_query(); ?>"</h2>

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

		<h2 class="center">Non trovato. Effettua una nuova ricerca.</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
