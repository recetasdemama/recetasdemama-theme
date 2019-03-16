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
</footer><!-- #colophon2 -->

<?php wp_footer(); ?>
<?php if(is_home() || is_page_template("category-list.php") || is_single() || is_category() || is_tag()){ ?>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/style.sprited.min.css" />
<?php } ?>

</body>
</html>
