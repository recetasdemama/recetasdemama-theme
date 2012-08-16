<?php
/**
 * Formato para noticias en cuadricula
 * Usado en la cuadricula de la página de inicio
 */
?>

<?php 
	$postClasses = "box-news";
	global $i;
	if ( in_array($i, array(2, 5, 8) ) )
		$postClasses .= " middle-box";
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($postClasses); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'toolbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* Obtenemos todas las cats */
			$id = get_the_ID();
			$categories = wp_get_post_categories($id);
			$tags = wp_get_post_tags($id);
			
			/* Añadiremos es slug de las categorias */
			$cats = array(); 
			foreach($categories as $c){
				$cat = get_category( $c );
				$cats[] = $cat->slug;
			}
			foreach($tags as $t){
				$tag = get_category( $t );
				$cats[] = $tag->slug;
			}
			
			/* Creamos los divs dependiendo de las categorias*/
			if ( in_array('video-receta', $cats) ) {
				echo "<div class='video-receta'><a href='".get_permalink()."'></a></div>";
			}
			if ( in_array('sin-gluten', $cats) ) {
				echo "<div class='sin-gluten'><a href='".get_permalink()."'></a></div>";
			}
			if ( in_array('patrocinado', $cats) ) {
				echo "<div class='patrocinado'><a href='".get_permalink()."'></a></div>";
			}
		?>
		<?php get_the_image( array( 'size' => 'list_img', 'width' => '180', 'height' => '130' ) ); ?>
		<p>
		  <?php excerpt(12); ?>
		</p>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
