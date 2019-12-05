<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */

		wp_enqueue_style('header', get_stylesheet_directory_uri().'/css/header.css?vn='.THEME_VERSION, array(), true);

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
    <script src="https://kit.fontawesome.com/b964618c19.js" crossorigin="anonymous"></script>
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
            <div class="switcher">
                <label for="sun" class="switch sun">
                    <i class="fas fa-sun"></i>
                    <input type="radio" name="switch" id="sun" value="bright">
                </label>

                <label for="moon" class="switch moon">
                    <i class="fas fa-moon"></i>
                    <input type="radio" name="switch" id="moon" value="dark">
                </label>
            </div>
        </header><!-- .site-header -->
