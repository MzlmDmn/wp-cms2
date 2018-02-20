<?php get_header(); ?> <!-- Appel à l'en-tête -->

<div id="tag">
	<h2>Mot-clé : <?php single_tag_title(); ?></h2>
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> -<?php the_date(); ?></p>
		<?php the_excerpt(); ?>
	<?php endwhile; ?>
</div>

<?php endif; ?>

<?php get_sidebar(); ?> <!-- Appel à la colonne latérale -->
<?php get_footer(); ?> <!-- Appel au pied de page -->