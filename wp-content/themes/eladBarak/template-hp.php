<?php
/*
    Template Name: Home Page
*/
function home_page_scripts() {
//    wp_enqueue_script('slider', get_stylesheet_directory_uri().'/js/jquery.bxslider.js', array('jquery'), true);
//    wp_enqueue_style('slider-style', get_stylesheet_directory_uri().'/css/jquery.bxslider.css', array(), true);
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
<section id="gallery" class="gallery">
    <?php if( have_rows('slider_images') ): ?>
        <?php while( have_rows('slider_images') ): the_row(); // vars
            $image = get_sub_field('image');
            $title = get_sub_field('title');
            $description = get_sub_field('description');
            ?>
            <div class="slide" style="background-image: url('<?php echo $image; ?>');">
                <p><?php echo $description; ?></p>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php get_footer(); ?>