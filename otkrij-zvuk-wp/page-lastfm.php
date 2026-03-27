<?php
/**
 * Template Name: Last.fm
 *
 * @package Otkrij_Zvuk
 */

get_header();
?>

    <main>
        <section class="section" style="padding-top: 150px;">
            <div class="container">
                <div class="lastfm-header">
                    <h2 class="section-title"><?php esc_html_e( 'Moj last.fm profil', 'otkrij-zvuk' ); ?></h2>
                    <p class="lastfm-subtitle"><?php esc_html_e( 'Pratite nedavno poslušane pesme na last.fm:', 'otkrij-zvuk' ); ?> </p>
                    
                    <div class="username-picker">
                        <input type="text" id="lastfmUser" value="predragkon" placeholder="<?php esc_attr_e( 'Unesite Last.fm Ime', 'otkrij-zvuk' ); ?>">
                        <button id="updateUserBtn" class="btn btn-primary btn-sm"><?php esc_html_e( 'Ažuriraj', 'otkrij-zvuk' ); ?></button>
                    </div>
                </div>

                <div class="recent-tracks-list" id="lastfmContainer">
                    <div class="loading-state"><?php esc_html_e( 'Učitavanje nedavnih pesama...', 'otkrij-zvuk' ); ?></div>
                </div>
                
                <h3 class="section-title" style="font-size: 1.8rem; margin-top: 4rem;"><?php esc_html_e( 'Top 5 albuma', 'otkrij-zvuk' ); ?></h3>
                <div class="lastfm-grid" id="lastfmTopAlbums">
                    <div class="loading-state"><?php esc_html_e( 'Učitavanje top albuma...', 'otkrij-zvuk' ); ?></div>
                </div>

                <h3 class="section-title" style="font-size: 1.8rem; margin-top: 4rem;"><?php esc_html_e( 'Top 5 pesama', 'otkrij-zvuk' ); ?></h3>
                <div class="lastfm-grid" id="lastfmTopTracks">
                    <div class="loading-state"><?php esc_html_e( 'Učitavanje top pesama...', 'otkrij-zvuk' ); ?></div>
                </div>
            </div>
            
            <div class="shape shape-2"></div>
            <div class="shape shape-3" style="bottom: 10%; right: 10%;"></div>
        </section>
    </main>

<?php
get_footer();
