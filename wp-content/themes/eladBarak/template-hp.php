<?php
/*
    Template Name: Home Page
*/
function home_page_scripts() {
    wp_enqueue_style('slick-style', get_stylesheet_directory_uri().'/css/slick.css', array(), true);
    wp_enqueue_style('slick-theme-style', get_stylesheet_directory_uri().'/css/slick-theme.css', array(), true);
    wp_enqueue_script('slick-script', get_stylesheet_directory_uri().'/js/slick.js', array('jquery'), true);
    wp_enqueue_script('script', get_stylesheet_directory_uri().'/js/script.js?vn='.THEME_VERSION, array('jquery'), true);
    wp_enqueue_style('home-page', get_stylesheet_directory_uri().'/css/home.css?vn='.THEME_VERSION, array(), true);
}
add_action( 'wp_enqueue_scripts', 'home_page_scripts' );
?>

<?php get_header(); ?>

<!-- Page image -->
<section id="slider" class="gallery">
    <?php if( have_rows('slider_images') ): ?>
        <?php while( have_rows('slider_images') ): the_row(); // vars
            $image = get_sub_field('image');
            $title = get_sub_field('title');
            $description = get_sub_field('description');
            ?>
            <div class="slide">
                <h1><?php echo $title; ?></h1>
                <img src="<?php echo $image; ?>" alt="<?php echo $description; ?>">
                <h2><?php echo $description; ?></h2>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php get_footer(); ?>