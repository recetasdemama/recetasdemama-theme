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
<div class="clear"></div>

<footer id="colophon" role="contentinfo">
	<div id="site-generator" class="page-wp">
		<?php if ( is_active_sidebar( 'sidebar-footer' ) ) : ?>
		<div id="sidebar-footer" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-footer' ); ?>
		</div><!-- #sidebar-footer .widget-area -->
		<?php endif; ?>
		<div class="clear"></div>
	</div>
	<div id="sign" class="page-wp">
		<p><a href="http://cleverconsulting.net">Diseño de Clever Consulting</a></p>
		<p><a href="http://www.splendeo.es/">Desarrollado por Splendeo</a></p>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>