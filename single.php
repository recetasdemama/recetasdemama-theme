<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<?php toolbox_content_nav( 'nav-below' ); ?>

				<?php 
					$orig_post = $post;
					global $post;
					$categories = get_the_category($post->ID);
					if ($categories) {
					$category_ids = array();
					foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

					$args=array(
						'category__in' => $category_ids,
						'post__not_in' => array($post->ID),
						'posts_per_page'=> 3, // Number of related posts that will be shown.
						'caller_get_posts'=>1
					);

					$my_query = new wp_query( $args );
					if( $my_query->have_posts() ) {
						echo '<div class="clear"></div>';
						echo '<div id="related_posts"><h3>Recetas relacionadas</h3>';
						
						$i = 1;

						while( $my_query->have_posts() ) {
							$my_query->the_post();

							get_template_part('content-list', get_post_format());
							$i++;

						}
						echo '<div class="clear"></div>';
						echo '</div>';
					}
					}
					$post = $orig_post;
					wp_reset_query(); 
				?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>


			<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_template_part( 'sidebar-single', get_post_format() ) ?>
<?php get_footer(); ?>