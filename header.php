<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Skeleton WordPress Theme Framework
 * @subpackage skeleton
 * @author Simple Themes - www.simplethemes.com
 */
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes();?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes();?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes();?>> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" <?php language_attributes();?>> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--><html <?php language_attributes();?>> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title><?php
	// Detect Yoast SEO Plugin
	if (defined('WPSEO_VERSION')) {
		wp_title('');
	} else {
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
		echo ' | ' . sprintf( __( 'Page %s', 'skeleton' ), max( $paged, $page ) );
	}
	?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Add CSS3 Rules here for IE 7-9
================================================== -->

<!--[if IE]>
<style type="text/css">
html.ie #navigation,
html.ie a.button,
html.ie .cta,
html.ie .wp-caption,
html.ie #breadcrumbs,
html.ie a.more-link,
html.ie .gallery .gallery-item img,
html.ie .gallery .gallery-item img.thumbnail,
html.ie .widget-container,
html.ie #author-info {behavior: url("<?php echo get_stylesheet_directory_uri();?>/PIE.php");position: relative;}</style>
<![endif]-->


<!-- Mobile Specific Metas
================================================== -->

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 

<!-- Favicons
================================================== -->

<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon.ico">

<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri();?>/images/apple-touch-icon.png">

<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri();?>/images/apple-touch-icon-72x72.png" />

<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri();?>/images/apple-touch-icon-114x114.png" />

<link rel="pingback" href="<?php echo get_option('siteurl') .'/xmlrpc.php';?>" />
<link rel="stylesheet" id="custom" href="<?php echo home_url() .'/?get_styles=css';?>" type="text/css" media="all" />

<?php
	/* 
	 * enqueue threaded comments support.
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	// Load head elements
	wp_head();
?>

</head>
<body <?php body_class(); ?>>
	<header>
		<div id="headerContainer">
			<div class="container">
				<div id="headerWrap" class="sixteen columns">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php
					if (isset($_GET['oldlogo'])) { ?>
					<img src="/dropBox/tnea/wp-content/themes/elite-airsoft/images/oldlogo.png" alt="<?php echo esc_attr( get_bloginfo('name','display')); ?>" />
					<?php } else { ?>
					<img src="/dropBox/tnea/wp-content/themes/elite-airsoft/images/logo.png" alt="<?php echo esc_attr( get_bloginfo('name','display')); ?>" />
					<?php } ?>
					</a>
					<div id="topSocial">
						<a href="#"><span id="twitterBirds"></span></a>
						<div id="socialBtns">
							<a href="#"><span id="facebook"></span></a>
							<a href="#"><span id="instagram"></span></a>					
						</div>
					</div>
				</div>
			</div>
		</div>
		<br class="clear" />
	</header>
	<nav>
		<div id="navContainer">
			<div class="container">
				<div id="navWrap" class="sixteen columns">
					<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary')); ?>
				</div>
			</div>
		</div>
		<br class="clear" />
	</nav>
	<div id="wrap" class="container">
		<div id="slider" class="sixteen columns">
			<?php do_shortcode( '[responsive_slider]' ); ?>
		</div>
