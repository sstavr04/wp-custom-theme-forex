<?php

# Enqueue assets
add_action( 'wp_enqueue_scripts', 'theme_4xc_enqueue_assets' );
function theme_4xc_enqueue_assets() {
    # Theme styles
    wp_enqueue_style( '4xc-styles', get_stylesheet_uri() );
}

# Register navigation menus. 
# Gives functionality to user to change main menu and footer from admin panel
register_nav_menus( [
    'main-menu' => __( 'Main 4xc Navigation Menu', '4xc-theme' ),
    'footer-menu' => __( 'Footer Menu', '4xc-theme' )
]);

# Add theme support custom-logo, allows user to set logo of website
add_action( 'after_setup_theme', 'theme_4xc_custom_logo_setup' );
function theme_4xc_custom_logo_setup() {
    add_theme_support( 'custom-logo' );
}

# Embed small js codes
add_action('wp_head', 'theme_4xc_custom_js' );
function theme_4xc_custom_js() {
    # Nav menu toggler for mobile (small screens)
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var menuToggle = document.querySelector('.nav-4xc-toggler');
            menuToggle.addEventListener('click', function() {
                document.querySelector('.nav-4xc-container').classList.toggle('mobile-active');
                document.querySelector('.nav-4xc-buttons').classList.toggle('mobile-active');
            });
        });
    </script>
    <?php

    if (is_front_page()){
        # FAQ section javascript (toggle visibility of answers)
        # Needed only in fontpage - could be loaded conditionally with shortcode too
        ?>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Select all elements with class "faq-toggle-icon"
                const buttons = document.querySelectorAll('.faq-toggle-icon');

                // Loop through each button
                buttons.forEach(button => {
                    // Add click event listener
                    button.addEventListener('click', function() {
                        // Find the parent element with class "faq-term"
                        const parent_faq_question = this.closest('.faq-term');
                        // Toggle class "open" on the parent element
                        parent_faq_question.classList.toggle('open');
                    });
                });
            });
        </script>
        <?php
    }

}


# Custom Post Types
# Include and initialize class that registers and adds functionality for Platform Post Type
include_once dirname(__FILE__)."/custom_post_types/platforms.php";
new PlatformsController();