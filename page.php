<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CG-3.0
 */

get_header();
?>

<main id="primary" class="site-main page-container">

    <?php
    while ( have_posts() ) :
        the_post();
        ?>

        <!-- Page title -->
        <h1 class="entry-title"><?php the_title(); ?></h1>

        <!-- Page content -->
        <div class="entry-content">
            <?php the_content(); ?>
        </div>

        <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            ?>
            <div class="comments-area">
                <?php comments_template(); ?>
            </div>
            <?php
        endif;

    endwhile; // End of the loop.
    ?>

</main><!-- #main -->

<?php
get_footer();
?>
