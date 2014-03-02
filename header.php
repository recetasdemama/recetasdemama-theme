<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es-ES" xml:lang="es-ES">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'toolbox' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link href='http://fonts.googleapis.com/css?family=Della+Respira' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/styleDR.css" />
<link rel="publisher" href="https://plus.google.com/101111441869338785722" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_enqueue_script('jquery'); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'before' ); ?>
<div id="wrap">
	<?
	if ( is_home() and !is_paged()) { 	
		$sticky = get_option( 'sticky_posts' ); // Get all sticky posts
		if (!empty($sticky)) {
			?><div class="Contenidostickys"><?
		  	rsort( $sticky ); // Sort the stickies, latest first
		  	$sticky = array_slice( $sticky, 0, 3 ); // Number of stickies to show
			$totalPostSticky=count($sticky);
			$actualPostSticky=1;
		  	query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1 ) ); // The query
		  	if (have_posts() ) { 
			  	while ( have_posts() ) : the_post(); 
					?>
                    <div class="stickys Sticky-<?=$actualPostSticky;?>-<?=$totalPostSticky;?>">
				  		<?php get_the_image( array( 'size' => 'full_img' ) ); ?>
                        <a class="tit" href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'toolbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
                    </div>
			  		<?
					$actualPostSticky++;
                endwhile;
		  	}
		  	wp_reset_query();
			?></div><?
		}
	}
	?>
	<header id="branding" role="banner">
		<div class="page-wp relative">
			
			<nav id="access" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #access -->
            <h1 id="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div>
	</header><!-- #branding -->

	<div id="main" class="page-wp">