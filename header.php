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
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/style.2013-11-12.css" />
<link rel="publisher" href="https://plus.google.com/101111441869338785722" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

<script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>

<script type='text/javascript'>
googletag.cmd.push(function() {
googletag.defineSlot('/28676221/rectangle-medium-bottom', [300, 250], 'div-gpt-ad-1378048491015-0').addService(googletag.pubads());
googletag.defineSlot('/28676221/rectangle-medium-home', [300, 250], 'div-gpt-ad-1378048491015-1').addService(googletag.pubads());
googletag.defineSlot('/28676221/rectangle-medium-single', [300, 250], 'div-gpt-ad-1378048491015-2').addService(googletag.pubads());
googletag.defineSlot('/28676221/skyscraper-home', [728, 90], 'div-gpt-ad-1378048491015-3').addService(googletag.pubads());
googletag.defineSlot('/28676221/skyscraper-single', [728, 90], 'div-gpt-ad-1378048491015-4').addService(googletag.pubads());
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>


<!--DIXIMEDIA-->

		<script type="text/javascript">
		
		    //<![CDATA[
		
		
		
		                OAS_url         = 'http://a.diximedia.es/';
		
		                OAS_listpos     = 'Top,TopRight,Middle,Middle2';
		
		                OAS_query       = '';
		
		                OAS_sitepage    =  'blogsfarm.com/recetasdemama';
		
		
		
		                OAS_rn      = '001234567890';
		
		                OAS_rns     = '1234567890';
		
		                OAS_rn      = new String (Math.random());
		
		                OAS_rns     = OAS_rn.substring (2, 11);
		
		                OAS_version = 11;
		
		
		
		                if (navigator.userAgent.indexOf('Mozilla/3') != -1) { OAS_version = 10;}
		
		                if (OAS_version >= 11) { document.write('<sc'+'ript type="text/javascript" src="' + OAS_url + '4/' + OAS_sitepage + '/1' +  OAS_rns + '@' + OAS_listpos + OAS_query + '"></scr' + 'ipt>');}
		
		
		
		                document.write('');
		
		
		
		                function OAS_NORMAL(pos){
		
		                    document.write('<a href="' + OAS_url + '1c/' + OAS_sitepage + '/1' + OAS_rns + '@' + OAS_listpos +  '!' + pos + OAS_query + '" target="_top">');
		
		                    document.write('<img src="' + OAS_url + '1/' + OAS_sitepage + '/1' + OAS_rns + '@' + OAS_listpos +  '!' + pos + OAS_query + '" border="0" alt="Click!" /></a>');
		
		                }
		
		                function OAS_AD(pos){
		
		                    if (OAS_version >= 11 && typeof(OAS_RICH)!='undefined') {
		
		                        OAS_RICH(pos);
		
		                    }else {
		
		                        OAS_NORMAL(pos);
		
		                    }
		
		                }
		
		                function OAS_VID(pos, site){
		
		                    if (site==null){
		
		                        var sitepage=OAS_sitepage;
		
		                    }else{
		
		                        var sitepage=site;
		
		                    }
		
		                    
		
		                    var position = (pos == undefined) ? "x90!x90" : pos;
		
		                    var oas = OAS_url + '2/';
		
		                    var oaspage = sitepage + '/1' + OAS_rns + '@' + position;
		
		                    var urlpubli = oas + oaspage;
		
		                    
		
		                    return urlpubli;
		
		                }    //]]>
		
		</script>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'before' ); ?>
<div class="megabanner" align="center">
	<?php 
		if ( is_home() ) {
			  if ( is_active_sidebar( 'home-ad-banner' ) ) { dynamic_sidebar( 'home-ad-banner' ); }
		} else {
		    if ( is_active_sidebar( 'ad-banner' ) ) { dynamic_sidebar( 'ad-banner' ); }
		}
	?>
</div>
<div id="wrap">
	<header id="branding" role="banner">
		<div class="page-wp">
			<h1 id="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<div id="lainformacion">
				<img src="<?php echo get_template_directory_uri(); ?>/images/lainformacion.png">
			</div>
			<div id="canguro_blogs">
				<img src="<?php echo get_template_directory_uri(); ?>/images/canguro_blogs.png">
			</div>
			<nav id="access" role="navigation">
				<h1 class="assistive-text section-heading"><?php _e( 'Main menu', 'toolbox' ); ?></h1>
				<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'toolbox' ); ?>"><?php _e( 'Skip to content', 'toolbox' ); ?></a></div>

				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #access -->
		</div>
	</header><!-- #branding -->

	<div id="main" class="page-wp">