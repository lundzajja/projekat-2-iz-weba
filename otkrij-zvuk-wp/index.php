<?php
get_header();
?>

<main id="primary" class="site-main">
    <div class="container" style="padding: 100px 20px; text-align: center; min-height: 50vh;">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title( '<h1 class="entry-title section-title">', '</h1>' ); ?>
                    </header>
                    <div class="entry-content" style="color: var(--text-secondary); max-width: 800px; margin: 0 auto; text-align: left;">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php
            endwhile;
        else :
            ?>
            <h1 class="section-title"><?php esc_html_e( 'Ništa nije pronađeno', 'otkrij-zvuk' ); ?></h1>
            <p style="color: var(--text-secondary);"><?php esc_html_e( 'Ono što tražite se ne nalazi na ovoj adresi.', 'otkrij-zvuk' ); ?></p>
            <?php
        endif;
        ?>
    </div>
</main>

<?php
get_footer();
