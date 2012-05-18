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
				$args=array(
					'orderby' => 'name',
					'order' => 'ASC'
				);
				$categories=get_categories($args);
				 	foreach($categories as $category) { ?>

				 		<div class="cat-box">
				 			<a href="/category/archives/<?=$category->category_nicename;?>">
				 				<img src="http://lorempixel.com/154/114/food" />
				 				<h4><?=$category->name?> (<?=$category->count?>)</h4>
				 			</a>
				 		</div>  

				<?php } ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>