<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CG-3.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Meta description -->
    <?php
    if ( is_single() || is_page() ) {
        $meta_description = strip_tags( get_the_excerpt() );
    } else {
        $meta_description = get_bloginfo( 'description' );
    }
    ?>
    <meta name="description" content="<?php echo esc_attr( $meta_description ); ?>">


	<?php wp_head(); ?>

	<script>
        document.addEventListener("DOMContentLoaded", function() {

            // Dectect system theme mode to activate light/dark themes
            const userPrefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;

			
            if (userPrefersDark) {
                document.body.classList.add("dark-mode");
            } else {
                document.body.classList.add("light-mode");
            }

            // Dectect system theme mode changing
            window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change", e => {
                if (e.matches) {
                    document.body.classList.add("dark-mode");
                    document.body.classList.remove("light-mode");
                } else {
                    document.body.classList.add("light-mode");
                    document.body.classList.remove("dark-mode");
                }
            });

			// ---
			// Update the badge image to match the system theme mode
			const badge = document.querySelector('.badge');

            function updateBadge() {
                const userPrefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;
                if (userPrefersDark) {
                    badge.src = "https://raw.githubusercontent.com/imayden/Images-cdn-repo/main/darkmodeColorLogo.png";
                    badge.alt = "Dark Badge";
                } else {
                    badge.src = "https://raw.githubusercontent.com/imayden/Images-cdn-repo/main/lightmodeLogo.png";
                    badge.alt = "Light Badge";
                }
            }

            // Initial check
            updateBadge();
			window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change", updateBadge);

			// Hamburger menu toggle
            const hamburger = document.querySelector('.hamburger');
            const menu = document.querySelector('.menu-container');

            hamburger.addEventListener('click', () => {
                menu.classList.toggle('active');
            });


        });
    </script>
	
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cg-3-0' ); ?></a>

	<header id="masthead" class="site-header">
		
	<div class="header-container">
            <!-- Site Logo -->
			<div class="site-logo-container">
				<div class="site-logo">
                    <a href="/"><img class="badge" /></a>
				</div>
			</div>

			<!-- Menu -->
			<div class="menu-container">
				 <!-- Frameless Button 1 -->
				<div class="frameless-button">
                	<a href="/">Home</a>
            	</div>

				<!-- Frameless Button 2 -->
				<div class="frameless-button">
					<a href="/#section-1">Button 1</a>
				</div>

				<!-- Framed Button -->
				<div class="framed-button">
					<a href="/#section-2">Button 2</a>
				</div>
				
			</div>

			<!-- Hamburger Menu Button -->
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>

        </div>
	</header><!-- #masthead -->
