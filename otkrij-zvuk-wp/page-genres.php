<?php
/**
 * Template Name: Žanrovi
 *
 * @package Otkrij_Zvuk
 */

get_header();
?>

    <main>
        <section id="zanrovi" class="section section-alt">
            <div class="container">
                <h2 class="section-title"><?php esc_html_e( 'Istražite žanrove', 'otkrij-zvuk' ); ?></h2>
                <div class="genres-grid" id="genresContainer">
                    <div class="loading-state"><?php esc_html_e( 'Učitavanje žanrova...', 'otkrij-zvuk' ); ?></div>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();
