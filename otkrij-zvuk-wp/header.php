<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="otkrij Zvuk - Saznajte sve o muzici, pročitajte recenzije, otkrijte žanrove i pratite šta slušam na Last.fm.">
    
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    
    <style>
        html { scroll-behavior: smooth; }
        .centered-link { display: block; text-align: center; margin-top: 2rem; font-weight: bold; color: #89CC04; text-decoration: underline; }
    </style>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="navbar">
        <div class="container nav-content">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">otkrij <span>Zvuk</span></a>
            
            <button class="hamburger" aria-label="Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            
            <nav class="nav-links">
            <?php
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'items_wrap'     => '%3$s',
                        'fallback_cb'    => false,
                        'depth'          => 1,
                    ) );
                } else {
                    ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>#pocetna">Početna</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>#moja-prica">Moja priča</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>#recenzije">Recenzije</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>#zanrovi">Žanrovi</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>#tribute">Tribute</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>#lastfm">Last.fm</a>
                    <?php
                }
            ?>
            </nav>
        </div>
    </header>
