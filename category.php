<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>

<?php  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

<?php if ( is_active_sidebar( 'sidebar-header' ) ) : ?>
	<div id="sidebar-header" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-header' ); ?>
	</div>
<?php endif; ?>
<h1 class="page-title tituloCategorias">
	<div class="left"></div>
<?php
						echo '<div class="text">' . single_cat_title( '', false ) . '</div>' ;
					?><div class="right"></div></h1>
<div class="global" id="content" role="main">

	<?php 
	$i = 0; // Variable para contar post
	$est=2; //variable para saber si tengo que poner post entero
	$iMini = 0; // Variable para contar post

    $cur_cat_id = get_cat_id( single_cat_title("",false) );
    query_posts( 'cat='. $cur_cat_id .'&posts_per_page=5&paged='. $paged );

    if ( have_posts() ) :
		/* Start the Loop */ 
		while ( have_posts() ) : the_post(); 
				if($i==$est){
					get_template_part( 'content-entero', get_post_format() );	
					if($est==2){
						$est+=4;
					}else{
						$est+=5;
					}
					
				}else{
					if($i==4){
						if ( is_active_sidebar( 'posts-ad-banner' ) ){ 
							?><div class="PublicidadEntrePost"><?
							dynamic_sidebar( 'posts-ad-banner' );
							?></div><?
						}
					}
					get_template_part( 'content-basico', get_post_format() );	
				}
				$i++;
				//get_template_part('content-list', get_post_format()); 			
		endwhile;  ?>
		<div class="clear"></div>
		<?php
        toolbox_content_nav( 'nav-below' );
	    endif
        ?>
</div><!-- #content -->
<?php get_footer(); ?>