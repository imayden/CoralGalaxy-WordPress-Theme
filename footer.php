<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CG-3.0
 */

?>



<footer id="colophon" class="site-footer">
    <div class="footer-container">
        <div class="footer-column">
            <a href="/"><img class="badge" alt="Badge Image"/></a>
			
            <div class="social-icons">
                <!-- Social Icons -->                
                <a href="https://twitter.com/" class="social-icon" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
				<a href="https://www.facebook.com/g" class="social-icon" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/ayden-deng-1b06a2228/" class="social-icon" aria-label="Instagram"><i class="fab fa-linkedin"></i></a>
				<a href="https://www.youtube.com/" class="social-icon" aria-label="Instagram"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <div class="footer-column">
			<div class="column-title">
				Explore
			</div>
            <div class="footer-posts">
                <?php
                // Query for the latest 6 posts
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 6,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $latest_posts = new WP_Query( $args );
                if ( $latest_posts->have_posts() ) :
                    echo '<div class="post-column">';
                    $counter = 0;
                    while ( $latest_posts->have_posts() ) : $latest_posts->the_post();
                        if ( $counter == 3 ) {
                            echo '</div><div class="post-column">';
                        }
                        ?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php
                        $counter++;
                    endwhile;
                    echo '</div>';
                    wp_reset_postdata();
                else :
                    echo '<p>No posts found.</p>';
                endif;
                ?>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
		<div class="footer-bottom-container">
				<div class="footer-bottom">
					<p> 2024 © Ayden Deng </p>
				</div>
			</div>



</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
