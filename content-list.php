<?php
/**
 * @package Toolbox
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
			
			/* Añadiremos es slug de las categorias */
			$cats = array(); 
			foreach($categories as $c){
				$cat = get_category( $c );
				$cats[] = $cat->slug;
			}

			/* Creamos los divs dependiendo de las categorias*/
			if ( in_array('video-receta', $cats) ) {
				echo "<div class='video-receta'></div>";
			}
			if ( in_array('sin-gluten', $cats) ) {
				echo "<div class='sin-gluten'></div>";
			}
			if ( in_array('patrocinado', $cats) ) {
				echo "<div class='patrocinado'></div>";
			}
		?>
		<?php get_the_image( array( 'size' => 'list_img', 'width' => '180', 'height' => '130' ) ); ?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
