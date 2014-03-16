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
<script>
function stickys(){
	if(jQuery(".Sticky-1-3").width()>550){
			jQuery(".Sticky-1-3 img").css('display', 'block');
			jQuery(".Sticky-1-3 img").css('width', '100%');
			jQuery(".Sticky-1-3 img").css('height', 'auto');
		}else{
			jQuery(".Sticky-1-3 img").css('display', 'block');
			jQuery(".Sticky-1-3 img").css('width', 'auto');
			jQuery(".Sticky-1-3 img").css('height', '100%');
		}
		if(jQuery(".Sticky-2-3").width()>550){
			jQuery(".Sticky-2-3 img").css('display', 'block');
			jQuery(".Sticky-2-3 img").css('width', '100%');
			jQuery(".Sticky-2-3 img").css('height', 'auto');
		}else{
			jQuery(".Sticky-2-3 img").css('display', 'block');
			jQuery(".Sticky-2-3 img").css('width', 'auto');
			jQuery(".Sticky-2-3 img").css('height', '100%');
		}
		if(jQuery(".Sticky-3-3").width()>550){
			jQuery(".Sticky-3-3 img").css('display', 'block');
			jQuery(".Sticky-3-3 img").css('width', '100%');
			jQuery(".Sticky-3-3 img").css('height', 'auto');
		}else{
			jQuery(".Sticky-3-3 img").css('display', 'block');
			jQuery(".Sticky-3-3 img").css('width', 'auto');
			jQuery(".Sticky-3-3 img").css('height', '100%');
		}
		if(jQuery(".Sticky-2-2").width()>550){
			jQuery(".Sticky-2-2 img").css('display', 'block');
			jQuery(".Sticky-2-2 img").css('width', '100%');
			jQuery(".Sticky-2-2 img").css('height', 'auto');
		}else{
			jQuery(".Sticky-2-2 img").css('display', 'block');
			jQuery(".Sticky-2-2 img").css('width', 'auto');
			jQuery(".Sticky-2-2 img").css('height', '100%');
		}
		if(jQuery(".Sticky-1-2").width()>550){
			jQuery(".Sticky-1-2 img").css('display', 'block');
			jQuery(".Sticky-1-2 img").css('width', '100%');
			jQuery(".Sticky-1-2 img").css('height', 'auto');
		}else{
			jQuery(".Sticky-1-2 img").css('display', 'block');
			jQuery(".Sticky-1-2 img").css('width', 'auto');
			jQuery(".Sticky-1-2 img").css('height', '100%');
		}
		if(jQuery(".Sticky-1-1").width()>550){
			jQuery(".Sticky-1-1 img").css('display', 'block');
			jQuery(".Sticky-1-1 img").css('width', '100%');
			jQuery(".Sticky-1-1 img").css('height', 'auto');
		}else{
			jQuery(".Sticky-1-1 img").css('display', 'block');
			jQuery(".Sticky-1-1 img").css('width', 'auto');
			jQuery(".Sticky-1-1 img").css('height', '100%');
		}
}
	jQuery( window ).resize(function() {
  		stickys();
	});
	
	jQuery( document ).ready(function() {
		stickys();
	});
</script>

</body>
</html>