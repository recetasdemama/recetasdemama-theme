<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>
<?php if ( is_active_sidebar( 'sidebar-header' ) ) : ?>
	<div id="sidebar-header" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-header' ); ?>
	</div>
<?php endif; ?>
		
			<div class="global contenidosingle" id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<?php toolbox_content_nav( 'nav-below' ); ?>
				<div class="ContenedorComentarios">
				<?php
  					// If comments are open or we have at least one comment, load up the comment template
  					if ( comments_open() || '0' != get_comments_number() )
  						comments_template( '', true );
				?>
				</div>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->


<?php get_footer(); ?>