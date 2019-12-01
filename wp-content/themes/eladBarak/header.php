<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */
	if(!is_mobile()) {
		wp_enqueue_style('header', get_stylesheet_directory_uri().'/css/header.css?vn='.THEME_VERSION, array(), true);
	} else {
		wp_enqueue_style('header', get_stylesheet_directory_uri().'/css/header_mobile.css?vn='.THEME_VERSION, array(), true);
	}
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134481042-1"></script>
    <title><?php wp_title(); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&display=swap" rel="stylesheet">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/style.css?vn='.THEME_VERSION ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
		<header>
            <?php
            wp_nav_menu( array(
                    'theme_location' => 'Main Menu',
                    'item_spacing' => 'discard'
                )
            );
            ?>
        </header><!-- .site-header -->
