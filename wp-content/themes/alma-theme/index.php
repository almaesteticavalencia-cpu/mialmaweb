<?php
/**
 * Main Index Template for ALMA
 *
 * @package ALMA_Theme
 */

if (is_front_page() || is_home()) {
    include get_template_directory() . '/front-page.php';
} else {
    get_header();
    ?>
    <main id="primary" class="site-main">
        <section class="alma-section">
            <div class="alma-container">
                <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="entry-header">
                                <h1 class="entry-title"><?php the_title(); ?></h1>
                            </header>
                            <div class="entry-content">
                                <?php the_content(); ?>
                            </div>
                        </article>
                        <?php
                    endwhile;
                else :
                    ?>
                    <p><?php esc_html_e('No se encontró contenido.', 'alma-theme'); ?></p>
                    <?php
                endif;
                ?>
            </div>
        </section>
    </main>
    <?php
    get_footer();
}

