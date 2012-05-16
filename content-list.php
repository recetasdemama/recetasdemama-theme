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
		<?php the_post_thumbnail( 'Noticias lista', array('class' => 'postthumbnail') ); ?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
