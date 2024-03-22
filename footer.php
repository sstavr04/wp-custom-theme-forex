    <?php wp_footer(); ?>

        <footer class="bg-gray">
            <div class="footer-container">

                <div class="row" id="footer-row-1">
                    <div class="column" style="flex: 1;">
                        <div style="max-width:320px">
                            <?php 
                            # Display the custom logo if it exists
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            if ( has_custom_logo() ) {
                                echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                            } else {
                                echo '<div>' . get_bloginfo('name') . '</div>';
                            }
                            ?>
                            <p style="margin-bottom:0;">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>

                        </div>
                                                
                        <!-- Footer menu -->
                        <div class="footer-menu" style="margin-top: 32px;margin-bottom: 32px;">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'footer-menu',
                                    'container_class' => 'nav-4xc'
                                ) );
                            ?>
                        </div>
                    </div>
                    <div class="column" style="gap:16px;" >
                        <span>
                            Get the app
                        </span>
    
                        <img alt="App store" src="<?php echo get_template_directory_uri() ?>/images/app_store.png">
                        <img alt="Play store" src="<?php echo get_template_directory_uri() ?>/images/play_store.png">

                    </div>
                </div>
                <div class="row" id="footer-row-2" style="margin-top:32px;border-top:1px solid #EAECF0;min-height:57px;align-items:end">

                    <div class="column" style="flex: 60%;min-height:57px;justify-content: end;">
                        © 2024 All rights reserved.
                    </div>
                    <div class="column">
                        <div class="row" style="gap: 24px;">
                            <img alt="X" width="24px" height="24px" src="<?php echo get_template_directory_uri() ?>/images/x.png">
                            <img alt="Linkedin" width="24px" height="24px" src="<?php echo get_template_directory_uri() ?>/images/linkedin.png">
                            <img alt="Facebook" width="24px" height="24px" src="<?php echo get_template_directory_uri() ?>/images/facebook.png">
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>