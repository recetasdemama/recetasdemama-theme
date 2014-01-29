<?php
/**
 * Formato de Noticia mini
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('mini'); ?>>
	<?php get_the_image( array( 'size' => 'full_img' ) ); ?>
    <header class="entry-header">
		<h1 class="entry-title">
        	<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'toolbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h1>
		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<? the_date('d/m/Y', 'Publicado el ',''); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_excerpt( __( 'Leer Más', 'toolbox' ) ); ?>
	</div><!-- .entry-content -->
</article>
