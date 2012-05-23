<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

			<?php 

				$i = 0; // Variable para contar post

				if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); 


						if ( !is_paged() ) { ?>

							<?php
								/* 
								 * Si es la primera mostramos el formato de noticia
								 * grande
								 */
								if ( $i == 0 ) {
									$i++;
									get_template_part( 'content-hightlight', get_post_format() );
								}
								/*
								 * El resto se mostrará en listas
								 */
								else { 
									if ( $i == 1 ) { ?>
									<div id="more-news">
										<h2>Más recetas recientes</h2>
									</div>
									<? } ?>
										<? get_template_part('content-list', get_post_format()); ?>
								<?	$i++; 
								} 
						} else { 
							// Contenido para paginas
							get_template_part( 'content', get_post_format() );
						}?>

						<?php endwhile;  ?>

				<div class="clear"></div>
				<?php toolbox_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'toolbox' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'toolbox' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>