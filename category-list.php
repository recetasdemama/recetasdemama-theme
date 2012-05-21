<?php
/**
 * Template Name: Category List Page
 * Description: Lista de categorías con imagenes
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>

		<div id="primary" class="full-width">
			<div id="content" class="category-page" role="main">

				<?php

				$terms = apply_filters( 'taxonomy-images-get-terms', '' );
				if ( ! empty( $terms ) ) {
				    foreach( (array) $terms as $term ) {
				        $cat_img[$term->term_id] = wp_get_attachment_image( $term->image_id, 'list_img' );
				    }
				}

				$args=array(
					'orderby' => 'name',
					'order' => 'ASC'
				);
				$categories=get_categories($args);
			 	foreach($categories as $category) { ?>

			 		<div class="cat-box">
			 			<a href="<?=get_category_link($category->term_taxonomy_id);?>">
			 				<?=$cat_img[$category->term_taxonomy_id];?>
			 				<h4><?=$category->name?> (<?=$category->count?>)</h4>
			 			</a>
			 		</div>  

				<?php } ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>