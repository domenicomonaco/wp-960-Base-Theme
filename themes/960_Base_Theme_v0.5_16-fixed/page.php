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

<div class="box articles">
<div class="block" id="articles">
<h2><?php the_title(); ?></h2>
	<div class="article">
		
			<div class="entry">
				<?php the_content(); ?>
			</div>
			<?php edit_post_link('Modifca Contenuto.', '<p>', '</p>'); ?>
		</div>
		</div>		</div>
		<?php endwhile; endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
