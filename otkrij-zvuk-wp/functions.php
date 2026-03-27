<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'otkrij_zvuk_setup' ) ) :
    function otkrij_zvuk_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        register_nav_menus(
            array(
                'primary' => esc_html__( 'Glavni meni', 'otkrij-zvuk' ),
            )
        );
    }
endif;
add_action( 'after_setup_theme', 'otkrij_zvuk_setup' );

function otkrij_zvuk_scripts() {
    wp_enqueue_style( 'google-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap', array(), null );
    wp_enqueue_style( 'otkrij-zvuk-style', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime( get_template_directory() . '/assets/css/style.css' ) );
    wp_enqueue_script( 'otkrij-zvuk-app', get_template_directory_uri() . '/assets/js/app.js', array(), filemtime( get_template_directory() . '/assets/js/app.js' ), true );
    wp_localize_script( 'otkrij-zvuk-app', 'themeData', array(
        'dataUrl'  => get_template_directory_uri() . '/assets/data/',
        'themeUrl' => get_template_directory_uri(),
        'siteUrl'  => site_url(),
    ) );
}
add_action( 'wp_enqueue_scripts', 'otkrij_zvuk_scripts' );
