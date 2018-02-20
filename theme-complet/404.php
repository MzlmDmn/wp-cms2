<?php get_header(); ?> <!-- Appel à l'en-tête -->

<div id="error404">
	<h2>Erreur de page</h2>
		<p>Oups, il semble que la page que vous avez demandée n'existe pas !</p>
		<p>Revenez sur la <a href="index.php">page d'accueil</a> du site</p>
</div>

<?php endif; ?>

<?php get_sidebar(); ?> <!-- Appel à la colonne latérale -->
<?php get_footer(); ?> <!-- Appel au pied de page -->