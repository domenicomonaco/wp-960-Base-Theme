<?php
/*
 * Theme Name: 960 Base Theme
 * Theme URI: http://960basetheme.kiuz.it
 * Description: Wordpress theme based on 960 Grid System
 * Author: Domenico Monaco
 * Author URI: http://www.kiuz.it
 * Version: 1.0
 */

?>
<?php get_header(); ?>

<div class="box articles">

<?php if (have_posts()) : ?>

<h2><a href="#">Last articles (Show / Hide)</a></h2>

<div class="block" id="articles">
	<?php while (have_posts()) : the_post(); ?>
	
		<div class="article">
			<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<h4><?php the_time('d.m.y') ?></h4>
			<p class="meta">Categorie: <?php the_category(', ') ?> | <?php the_tags('<br />Tags: ', ', ', ''); ?></p>
			<div class="entry"><?php the_content(); ?></div>
			<h4 class="add_comment"><?php comments_popup_link('Aggiungi un commento ', '1 Commento presente ', '% Commenti presenti '); ?></h4>
		</div>

	<?php endwhile; ?>
</div>

<?php endif; ?>

</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
