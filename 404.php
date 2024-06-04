<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package CG-3.0
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="error-404 not-found">
        <header class="page-header">
            <h2 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found (404 Error)!', 'cg-3-0' ); ?></h2>
        </header><!-- .page-header -->

        <div class="page-content">
		<hr>
            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'cg-3-0' ); ?></p>

            <?php get_search_form(); ?>
			
            <div class="error-404-columns">
                <div class="column">
                    <h2><?php esc_html_e(''); ?></h2>
                    <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
                </div>

                <div class="column">
                    <h2><?php esc_html_e( 'Most Used Categories', 'cg-3-0' ); ?></h2>

                    <ul>
                        <?php
                        wp_list_categories(
                            array(
                                'orderby'    => 'count',
                                'order'      => 'DESC',
                                'show_count' => '',
                                'title_li'   => '',
                                'number'     => 10,
                            )
                        );
                        ?>
                    </ul>

                </div>
                <div class="column">
                    <h2><?php esc_html_e( '' ); ?></h2>
                    <?php
                    $cg_3_0_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'cg-3-0' ), convert_smilies( ':)' ) ) . '</p>';
                    the_widget( 'WP_Widget_Archives', 'dropdown=6', "after_title=</h2>$cg_3_0_archive_content" );
                    ?>
                </div>
                <div class="column">
                    <h2><?php esc_html_e( '' ); ?></h2>
					
                    <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
                </div>
            </div><!-- .error-404-columns -->
        </div><!-- .page-content -->
    </section><!-- .error-404 -->
</main><!-- #main -->

<?php
get_footer();
?>
