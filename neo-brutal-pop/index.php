<?php
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php
    if ( have_posts() ) :

        /* Start the Loop */
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('retro-window'); ?>>
                <div class="title-bar">
                    <div class="title-bar-title">
                        <?php
                        if ( is_singular() ) :
                            the_title();
                        else :
                            ?>
                            <a href="<?php the_permalink(); ?>" rel="bookmark" style="color: inherit; text-decoration: none;"><?php the_title(); ?></a>
                            <?php
                        endif;
                        ?>
                    </div>
                    <div class="title-bar-controls">X</div>
                </div>

                <div class="window-content">
                    <?php
                    if ( is_singular() ) :
                        the_content();
                    else :
                        the_excerpt();
                    endif;
                    ?>
                </div>
            </article>
            <?php
        endwhile;

        // Navigation
        the_posts_pagination( array(
            'prev_text' => '<span class="screen-reader-text">' . __( 'Previous page', 'neo-brutal-pop' ) . '</span>',
            'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'neo-brutal-pop' ) . '</span>',
            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'neo-brutal-pop' ) . ' </span>',
        ) );

    else :
        ?>
        <div class="retro-window">
             <div class="title-bar">
                <div class="title-bar-title">Error</div>
                <div class="title-bar-controls">X</div>
            </div>
            <div class="window-content">
                <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'neo-brutal-pop' ); ?></p>
                <?php get_search_form(); ?>
            </div>
        </div>
        <?php

    endif;
    ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
