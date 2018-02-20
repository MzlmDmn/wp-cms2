<?php
/* Ajout des emplacements des barres de menus */
if (function_exists('register_nav_menus')){
	register_nav_menus(
		array(
			'primary' => 'Menu principal',
			'secondary' => 'Menu secondaire'
		)
	);
}

function sidebar_widgets_init() {

	register_sidebar( array(
		'name'          => 'Premier emplacement',
		'id'            => 'first',
		'description' 	=> 'Zone des widgets de la Sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => 'Second emplacement',
		'id'            => 'second',
		'description' 	=> 'Zone des widgets de la Sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'sidebar_widgets_init' );

/* Modification du nombre de mot pour l'extrait */

function wordsExcerpt($length){
	return 20;
}
add_filter('excerpt_length', 'wordsExcerpt');

/* Affichage pour la fin de l'article dans la page de catégorie */

function endExcerpt($more){
	return '&nbsp;[&rarr;]';
}
add_filter('excerpt_more','endExcerpt');

/* Gestion des images à la une */

add_theme_support('post-thumbnails');


/* Enable support for post formats. */

add_theme_support('post-formats', array(
	'aside',
	'chat',
	'gallery',
	'image',
	'link',
	'quote',
	'status',
	'video',
	'audio'
	)
);

?>