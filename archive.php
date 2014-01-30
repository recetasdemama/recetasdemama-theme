<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
<?php
						echo '<div class="text">' . single_cat_title( '', false ) . '</div>' ;
					?><div class="right"></div></h1>
<div class="global" id="content" role="main">

	<?php 
	$i = 0; // Variable para contar post
	$est=2; //variable para saber si tengo que poner post entero
	$iMini = 0; // Variable para contar post
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
		<?php toolbox_content_nav( 'nav-below' ); 
	else : ?>
        <article id="post-0" class="post no-results not-found">
            <header class="entry-header">
                <h1 class="entry-title"><?php _e( 'Nothing Found', 'toolbox' ); ?></h1>
            </header><!-- .entry-header -->
      
            <div class="entry-content">
                <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'toolbox' ); ?></p>
                <?php get_search_form(); ?>
            </div><!-- .entry-content -->
        </article><!-- #post-0 -->
	<?php endif; ?>
</div><!-- #content -->
<?php get_footer(); ?>