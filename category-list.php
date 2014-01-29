<?php
/**
 * Template Name: Category List Page
 * Description: Lista de categorías con imagenes
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

<h1 class="page-title tituloCategorias">
	<div class="left"></div>
	<div class="text">Categorías</div>
    <div class="right"></div>
</h1>
<div class="global" id="content" role="main">
		
				

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
                	<article class="mini cat">
						<a href="<?= get_category_link($category->term_id); ?>">
							<?= $cat_img[$category->term_id]; ?>
                        </a>
    					<header class="entry-header">
							<h1 class="entry-title">
        						<a href="<?= get_category_link($category->term_id); ?>"><?= $category->name ?></a>
        					</h1>
						</header><!-- .entry-header -->
					</article>
				<?php } ?>

			</div><!-- #content -->
		

<?php get_footer(); ?>