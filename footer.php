<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?>

	</div><!-- #main -->
</div> <!-- #wrap -->

<footer id="colophon" role="contentinfo">
	<div id="site-generator" class="page-wp">
		<div class="copy">
			<h3>Las Recetas de Mamá © 2012</h3>
			<ul>
				<li><a href="#">Empresa</a></li>
				<li><a href="#">Contacta con nosotros</a></li>
			</ul>
			<a href="#" class="tienda-button">Visita nuestra tienda online</a>
		</div>
		<div>
			<?php if ( is_active_sidebar( 'sidebar-footer' ) ) : ?>
			<div id="sidebar-footer" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-footer' ); ?>
			</div><!-- #sidebar-footer .widget-area -->
			<?php endif; ?>
		</div>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>