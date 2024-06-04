<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package CG-3.0
 */

get_header();
?>

<main id="primary" class="site-main search-results-page">

    <?php if ( have_posts() ) : ?>

        <header class="page-header">
			<?php get_search_form(); ?>
            <h1 class="page-title">
                <?php
                /* translators: %s: search query. */
                printf( esc_html__( 'Search Results for: %s', 'cg-3-0' ), '<span>' . get_search_query() . '</span>' );
                ?>
            </h1>
        </header><!-- .page-header -->

        <div class="search-results-grid">
            <?php
            /* Start the Loop */
            while ( have_posts() ) :
                the_post();
                ?>

                <div class="search-results-grid-item">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="search-results-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>

                    <div class="search-results-header">
                        <h2 class="search-results-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="search-results-meta"><?php the_date(); ?> by <?php the_author(); ?></div>
                    </div>

                    <div class="search-results-summary"><?php the_excerpt(); ?></div>
                    <a class="search-results-read-more" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'cg-3-0' ); ?></a>
                </div>

                <?php
            endwhile;
            ?>
        </div>

        <?php the_posts_navigation(); ?>

    <?php else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

</main><!-- #main -->

<?php
get_footer();
?>
