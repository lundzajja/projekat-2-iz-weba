<?php
/**
 * Template Name: Početna (Front Page)
 */

get_header();
?>

    <main>
        <section id="pocetna" class="hero">
            <div class="container hero-content">
                <h1><?php esc_html_e( 'Zaronite u muziku', 'otkrij-zvuk' ); ?></h1>
                <p><?php esc_html_e( 'Pročitajte iskrene recenzije, istražite različite žanrove i pratite slušanje muzike in real time preko Last.fm platforme.', 'otkrij-zvuk' ); ?></p>
                <div class="hero-actions">
                    <a href="#recenzije" class="btn btn-primary"><?php esc_html_e( 'Pročitajte recenzije', 'otkrij-zvuk' ); ?></a>
                    <a href="#lastfm" class="btn btn-secondary"><?php esc_html_e( 'Moja istorija slušanja', 'otkrij-zvuk' ); ?></a>
                </div>
            </div>
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
        </section>

        <section id="moja-prica" class="section">
            <div class="container">
                <h2 class="section-title"><?php esc_html_e( 'Kako je muzika uticala na mene?', 'otkrij-zvuk' ); ?></h2>
                <p class="hero-desc"><?php echo wp_kses_post( 'Muzika je bila deo mog života od malih nogu i oblikovala me u ličnost koju jesam danas. Kroz godine, slušao sam različite žanrove i izvođače. Kao mali bio sam pod uticajem raznih izvođača i pesama. Neki od njih su Adele, Van Gogh, Dino Merlin, Ceca, Amy Winehouse i mnogi drugi. Album Happier Than Ever je bio prvi album koji je me naučio da album treba da se sluša od početka do kraja, ne na shuffle jer onda ne možemo da doživimo celu priču koju taj album nosi.
                    Konceptualni albumi su mi oduvek bili fascinantni jer umetnici imaju priliku da ispričaju priču kroz muziku i tekstove. Neki od mojih omiljenih konceptualnih albuma su Lemonade by Beyoncé, White Pony by Deftones, Igor i Chromakopia by Tyler, The Creator, Ctrl by SZA...
                    Kroz ovaj sajt želim da podelim moje mišljenje o muzici, da preporučim dobre albume i pesme.' ); ?>
                </p>
                <blockquote style="font-style: italic; margin: 2rem 0; padding: 1rem; border-left: 4px solid var(--primary); background: var(--bg-secondary);">
                    "People don't make albums anymore. They just try to sell a bunch of little quick singles. And they burn out, and they put out a new one, and they burn out, and they put out a new one". - Beyoncé from movie "Life Is But A Dream" (2013).
                </blockquote>
            </div>
        </section>

        <section id="recenzije" class="section">
            <div class="container">
                <h2 class="section-title"><?php esc_html_e( 'Najnovije recenzije', 'otkrij-zvuk' ); ?></h2>
                <div class="reviews-grid" id="reviewsContainer">
                    <div class="loading-state"><?php esc_html_e( 'Učitavanje recenzija...', 'otkrij-zvuk' ); ?></div>
                </div>
                <a href="<?php echo esc_url( site_url( '/recenzije' ) ); ?>" class="centered-link"><?php esc_html_e( 'Više recenzija &rarr;', 'otkrij-zvuk' ); ?></a>
            </div>
        </section>

        <section id="zanrovi" class="section section-alt">
            <div class="container">
                <h2 class="section-title"><?php esc_html_e( 'Istražite žanrove', 'otkrij-zvuk' ); ?></h2>
                <div class="genres-grid" id="genresContainer">
                    <div class="loading-state"><?php esc_html_e( 'Učitavanje žanrova...', 'otkrij-zvuk' ); ?></div>
                </div>
                <a href="<?php echo esc_url( site_url( '/zanrovi' ) ); ?>" class="centered-link"><?php esc_html_e( 'Svi žanrovi &rarr;', 'otkrij-zvuk' ); ?></a>
            </div>
        </section>

        <section id="tribute" class="section section-alt">
            <div class="container">
                <h2 class="section-title"><?php esc_html_e( 'Tribute albumima i izvođačima', 'otkrij-zvuk' ); ?></h2>
                <p class="section-desc"><?php esc_html_e( 'Ovde ću odati počast albumima i izvođačima koji su ostavili trag u muzičkoj istoriji i na meni.', 'otkrij-zvuk' ); ?></p>
                <div class="tribute-grid">
                    <?php 
                        $theme_url = get_template_directory_uri();
                    ?>
                    <div class="card">
                        <img src="<?php echo esc_url( $theme_url . '/assets/pics/sinmiedo.png' ); ?>" alt="Kali Uchis - Sin miedo" class="card-img" loading="lazy">
                        <div class="card-content">
                            <h3 class="card-title">Sin miedo (del amor y otros demonios)</h3>
                            <div class="card-subtitle">Kali Uchis</div>
                            <p class="card-desc">Odajem počast albumu Sin miedo (del amor y otros demonios) by Kali Uchis koji je me spasio u mnogo mračnom periodu života. Ovaj album daje neku toplu energiju. Album je ceo na španskom što ga čini još više posebnim nego što već jeste. Obuhvata žanrove Pop i RnB muzike.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="<?php echo esc_url( $theme_url . '/assets/pics/renaissance.webp' ); ?>" alt="Beyoncé - Renaissance" class="card-img" loading="lazy">
                        <div class="card-content">
                            <h3 class="card-title">Renaissance</h3>
                            <div class="card-subtitle">Beyoncé</div>
                            <p class="card-desc">Renaissance by Beyoncé. Ovaj album je prvi album koji konceptualnu trilogiju u kojem će kroz različite tri različita albuma, biti obuhvaćeno više muzičkih žanrova. Renaissance predstavlja Pop, Rnb, Hip-Hop, Dance, House. Drugi album ove trilogije nosi ime COWBOY CARTER i on obuhvata žanrove Country, Americana music, Southern soul, Hip-Hop.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="<?php echo esc_url( $theme_url . '/assets/pics/brat.png' ); ?>" alt="Charli XCX - brat" class="card-img" loading="lazy">
                        <div class="card-content">
                            <h3 class="card-title">brat</h3>
                            <div class="card-subtitle">Charli xcx</div>
                            <p class="card-desc">brat nije bio samo album. Bio je manifest. Odlikuje ga ikonični neon zeleni kvadrat sa malim slovima u arial fontu. Postao je viralni fenomen koji je preplavio društvene mreže i pop kulturu. Album dočarava kulturu žurki i stvaranje novog talasa internet sadržaja. Charli nije pisala metafore. Htela je da album zvuči kao razgovor, kao nešto što bi mogla da ti kaže u taksiju na putu do kluba.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="<?php echo esc_url( $theme_url . '/assets/pics/sophie.png' ); ?>" alt="SOPHIE" class="card-img" loading="lazy">
                        <div class="card-content">
                            <h3 class="card-title">SOPHIE</h3>
                            <div class="card-subtitle">Diva electronic i hyperpop muzike</div>
                            <p class="card-desc">SOPHIE. Diva electronic i hyperpop muzike koja nažalost nije više među nama. Ostavila je veliki utisak na muzičku scenu. Bez nje mnogi hitovi danas ne bi postojali. osoba koja je zaslužena za moje otkrivanje ovog muzičkog žanra. Forever in our hearts!</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="<?php echo esc_url( $theme_url . '/assets/pics/amy.jpg' ); ?>" alt="Amy Winehouse" class="card-img" loading="lazy" style="object-position: top;">
                        <div class="card-content">
                            <h3 class="card-title">Amy Winehouse</h3>
                            <div class="card-subtitle">Ikona pop muzike</div>
                            <p class="card-desc">Amy Winehouse. Ni ona nije više među nama, ali je ostavila veliki utisak. I ako je se borila sa narkoticima, alkoholom i depresijom, njen nekonvencionalni stil i neverovatni glas pokazali su da ženskim pop umetnicama nije potrebno da izgledaju ili zvuče na određeni način.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="<?php echo esc_url( $theme_url . '/assets/pics/marina.jpg' ); ?>" alt="Marina Tucaković" class="card-img" loading="lazy" style="object-position: top;">
                        <div class="card-content">
                            <h3 class="card-title">Marina Tucaković</h3>
                            <div class="card-subtitle">Tekstopisac</div>
                            <p class="card-desc">Marina Tucaković - Tekstopisac kakav se više nikada neće roditi. Marina Tucaković je postala glas čitavih generacija svojim tekstovima. Već sa devetnaest godina počela je da piše tekstove za pesme. Napisala je više od 4.000 pesama za gotovo sve najznačajnije izvođače, ne samo u Srbiji, već u celom regionu.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="lastfm" class="section">
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

                <a href="<?php echo esc_url( site_url( '/lastfm' ) ); ?>" class="centered-link"><?php esc_html_e( 'last.fm profil &rarr;', 'otkrij-zvuk' ); ?></a>
            </div>
        </section>
    </main>

<?php
get_footer();
