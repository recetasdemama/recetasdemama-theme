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
		<p>&nbsp;</p>
		<p>&nbsp;</p>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1&appId=180884128606005";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</body>
</html>