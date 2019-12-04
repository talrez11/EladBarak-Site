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

<section id="logos">
    <ul>
        <?php if( have_rows('logos') ): ?>
            <?php while( have_rows('logos') ): the_row(); // vars
                $image = get_sub_field('image');
                ?>
                <li class="logo">
                    <span>
                        <img src="<?php echo $image; ?>" alt="">
                    </span>
                </li>
            <?php endwhile; ?>
        <?php endif; ?>
    </ul>
</section>

<section class="about">
    <?php
        echo get_field('about', $post->ID, true);
    ?>
</section>

<section class="features">
    <?php
        echo get_field('features_heading', $post->ID, true);
    ?>
    <div class="wrap">
        <?php if( have_rows('features') ): ?>
            <?php while( have_rows('features') ): the_row(); // vars
                $title = get_sub_field('title');
                $description = get_sub_field('description');
                ?>
                <div class="feature">
                    <h3><?php echo $title; ?></h3>
                    <?php echo $description; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<section id="contact">
    <h2>GET TO KNOW US</h2>
    <p>JUST SEND US A MESSAGE AND WE'LL GET BACK TO YOU IN NO TIME</p>
    <form id="sign">
        <div id="loader">
            <img src="<?php echo get_stylesheet_directory_uri().'/images/loader.gif'?>" alt="">
        </div>
        <div id="response"></div>
        <input type="hidden" name="action" value="send_to_mailchimp">
        <label for="first-name">
            <input type="text" id="first-name" name="fname" placeholder="FIRST NAME">
        </label>
        <label for="last-name">
            <input type="text" id="last-name" name="lname" placeholder="LAST NAME">
        </label>
        <label for="email">
            <input type="email" id="email" name="email" placeholder="EMAIL ADDRESS">
        </label>
        <label for="message">
            <textarea name="message" id="message" cols="30" rows="10" placeholder="WHAT'S ON YOUR MIND?"></textarea>
        </label>
        <label for="submit" class="submit">
            <input type="submit" id="submit" value="SEND">
        </label>
    </form>

    <address>
        <p><a href="mailto:STUDIO@ELADBARAK.COM">STUDIO@ELADBARAK.COM</a></p>
        <p>HA'HARASH 8 RAMAT HA'SHARON</p>
        <p><a href="tel:052-5014072">052-5014072</a></p>
    </address>
</section>

<?php get_footer(); ?>