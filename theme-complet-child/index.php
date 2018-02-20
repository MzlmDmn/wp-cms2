<?php

get_header();

?>

<div id="posts">
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <?php if(is_sticky($post_ID)) : ?>
        <div <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
            <p><?php comments_number('Aucun commentaire', 'Un seul commentaire', '% commentaires'); ?></p>
        </div>
    <?php else: ?>
        <div class="one-post">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
            <p><?php comments_number('Aucun commentaire', 'Un seul commentaire', '% commentaires'); ?></p>
        </div>
<?php 
    endif;
    endwhile;
	endif; ?>
</div>
<?php
    get_sidebar();
    get_footer();
?>