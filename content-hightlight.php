<?php
/**
 * Formato de Noticia Destacada
 * Para la primera noticia del Home.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('bignews'); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'toolbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<? the_date('d/m/Y', 'Publicado el ',''); ?>
			en <? the_category(', '); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<?php get_the_image( array( 'size' => 'full_img', 'width' => '630', 'height' => '380' ) ); ?>
	<div class="entry-content">
		<?php the_excerpt( __( 'Leer la receta entera', 'toolbox' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'toolbox' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
