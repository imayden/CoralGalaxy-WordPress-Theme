<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CG-3.0
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="post-container">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>


			<!-- Featured Image -->
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="post-thumbnail">
					<?php the_post_thumbnail(); ?>
				</div>
            <?php endif; ?>

			<!-- Post title -->
            <h1 class="entry-title"><?php the_title(); ?></h1>


            <!-- Post meta information -->
            <div class="post-meta">
                <span class="post-author">Author: <?php the_author(); ?></span>
                <span class="post-date">Published on: <?php echo get_the_date(); ?></span>
                <span class="post-categories">Categories: <?php the_category(', '); ?></span>
                <span class="post-tags"><?php the_tags('Tags: ', ', ', ''); ?></span>
            </div>

            <!-- Post content -->
            <div class="entry-content">
                <?php the_content(); ?>
            </div>

            <!-- Post navigation -->
            <div class="post-navigation">
                <?php
                the_post_navigation(
                    array(
                        'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous', 'cg-3-0' ) . '</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next', 'cg-3-0' ) . '</span> <span class="nav-title">%title</span>',
                    )
                );
                ?>
            </div>

            <!-- Comments section -->
            <?php
            if ( comments_open() || get_comments_number() ) :
                ?>
                <div class="comments-area">
                    <?php comments_template(); ?>
                </div>
                <?php
            endif;

        endwhile; // End of the loop.
        ?>
    </div>
</main><!-- #main -->

<?php
get_footer();
?>
