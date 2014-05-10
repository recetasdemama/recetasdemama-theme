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
</footer><!-- #colophon -->
<footer id="colophon2" role="contentinfo">
    <div id="site-generator" class="page-wp caricatura">
		<?php if ( is_active_sidebar( 'sidebar-footer2' ) ) : ?>
		<div id="sidebar-footer" class="widget-area" role="complementary">
        	<aside class="widget Wantes"></aside>
			<?php dynamic_sidebar( 'sidebar-footer2' ); ?>
            <aside class="widget Wdespues"></aside>
		</div><!-- #sidebar-footer .widget-area -->
		<?php endif; ?>
		<div class="clear"></div>
	</div>
</footer><!-- #colophon2 -->

<?php wp_footer(); ?>
</body>
</html>