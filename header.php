<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package bootstrapwp
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<!-- !Site navigation -->
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<header class="site-header" role="banner">
		<nav role="navigation">
			<?php echo do_shortcode( "[hmenu id=1]" ); ?>
		</nav>
	</header>

<div id="content" class="site-content">
