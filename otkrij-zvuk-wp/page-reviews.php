<?php
/**
 * Template Name: Recenzije
 *
 * @package Otkrij_Zvuk
 */

get_header();
?>

    <main>
        <section id="recenzije" class="section">
            <div class="container">
                <h2 class="section-title"><?php esc_html_e( 'Najnovije recenzije', 'otkrij-zvuk' ); ?></h2>
                <div class="reviews-grid" id="reviewsContainer">
                    <div class="loading-state"><?php esc_html_e( 'Učitavanje recenzija...', 'otkrij-zvuk' ); ?></div>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();
