<?php 

// Template Name: Page inverse
// Page sans sidebar, avec une mise en forme spécifique

get_header(); ?> <!-- Appel à l'en-tête -->
<?php get_sidebar(); ?> <!-- Appel au sidebar -->

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div id="pages">
        <h2><?php the_title(); ?></h2>
        <div class="my-page">
            <?php the_content(); ?>
        </div>
<?php endwhile; ?>
<?php endif; ?>
    </div>
<?php get_footer(); ?> <!-- Appel au pied de page -->