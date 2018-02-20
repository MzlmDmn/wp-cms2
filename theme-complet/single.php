<?php get_header(); ?> <!-- Appel à l'en-tête -->

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<div class="prev-next">
		<div class="prev-post"><?php previous_post_link(); ?></div>
		<div class="next-post"><?php next_post_link(); ?></div>
	</div>
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
	<p>Les articles et le profil de <?php the_author_posts_link(); ?></p>
	<p>Publié le :<?php the_date(); ?></p>
	<p>Catégorie(s) : <?php the_category(); ?></p>
	<p class="tags"><?php the_tags(); ?></p>
	<div id="comments">
		<h3>Les commentaires de l'article</h3>
		<?php comments_template(); ?>
	</div>

<?php endwhile; ?>
<?php endif; ?>
<?php get_sidebar(); ?> <!-- Appel à la colonne latérale -->
<?php get_footer(); ?> <!-- Appel au pied de page -->


<?php /*
       if(have_posts()) : while(have_posts()) : the_post(); ?>

<div id="single-post">
	<?php
	$format='format';
	if(!get_post_format()){
		get_template_part($format, 'standard');
	} else{
		get_template_part($format, get_post_format());
	}
	?>
</div> */