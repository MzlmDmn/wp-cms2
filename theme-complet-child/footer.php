<footer>
	<div id="first-footer-widget">
		<?php dynamic_sidebar( 'first-footer' ); ?>
	</div>
	<div id="second-footer-widget">
		<?php dynamic_sidebar( 'second-footer' ); ?>
	</div>
	<div id="third-footer-widget">
		<?php dynamic_sidebar( 'third-footer' ); ?>
	</div>
	<div id="fourth-footer-widget">
		<?php dynamic_sidebar( 'fourth-footer' ); ?>
	</div>
	<div class="contentinfo">
		<?php bloginfo('name'); ?> - <?php the_author(); ?> | © Tous droits réservés
	</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>