<?php get_header(); ?> <!-- Appel à l'en-tête -->

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<div id="pages">
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
	</div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_sidebar(); ?> <!-- Appel à la colonne latérale -->
<?php get_footer(); ?> <!-- Appel au pied de page -->