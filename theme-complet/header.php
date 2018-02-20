<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Theme Complet
 * @since 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <title>
            <?php bloginfo('name');
            if(is_home() || is_front_page()) : ?>
                &mdash; <?php bloginfo('description');
            else : ?>
                &mdash; <?php wp_title('', true);
            endif; ?>
        </title>
        <link rel='stylesheet' href='<?php bloginfo('stylesheet_url'); ?>' type="text/css" media="screen" />
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="Generator" content="<?php bloginfo('version'); ?>" /> 
        <?php wp_head(); ?>    
    </head>
    
    <body <?php body_class(); ?>>
        <div id="content">
			<!-- Navigation principale -->
			<nav id="primary">
				<?php wp_nav_menu(array('sort_column' => 'menu_order',
									   'theme_location' => 'primary')
								 ); ?>
			</nav>

			<div id="slogan-title">
					<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
					<h2><?php bloginfo('description'); ?></h2>
				</div>

			<!-- Navigation secondaire -->
			<nav id="secondary">
				<?php wp_nav_menu(array('sort_column' => 'menu_order',
									   'theme_location' => 'secondary')
								 ); ?>
			</nav>