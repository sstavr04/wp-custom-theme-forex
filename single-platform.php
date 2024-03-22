<?php get_header(); ?>

<main role="main" aria-label="Content">

    <!-- section -->
    <?php 
        if ( have_posts()) : while ( have_posts() ) : the_post(); 
            $description = get_post_meta( get_the_ID(), 'platform_description', true );
    ?>
        <div class="bg-gray">
            <div class="site-box platform-slider ">
                <h1><?php the_title() ?></h1>
                <p class="platform-sub-heading"><?php echo esc_attr($description) ?></p>
            </div>
        </div>
        <!-- Platform page content -->
        <div class="site-box" id="platform-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="platform-content-container">
                <!-- Download links -->
                <div class="platform-links">
                    <?php 
                        # Retrieve from post meta the platform links and show the appropriate buttons
                        $post_id = get_the_ID();
                        if(  metadata_exists('post', $post_id, 'platform_links')){
                            $links          = get_post_meta(  $post_id, 'platform_links', true );
                            $links_array    = (array)json_decode($links);    
                    ?>
                        <?php if(isset($links_array['windows'])){ ?>
                        <a alt="Windows Download Link" target="_blank" href="<?php echo esc_url($links_array['windows']);?>" class="btn-link" style="margin-bottom:30px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <rect x="17" y="17" width="10" height="10" fill="#FEBA08"/>
                                <rect x="5" y="17" width="10" height="10" fill="#05A6F0"/>
                                <rect x="17" y="5" width="10" height="10" fill="#80BC06"/>
                                <rect x="5" y="5" width="10" height="10" fill="#F25325"/>
                            </svg>
                            <span>Windows</span>
                        </a>
                        <?php } ?>

                        <?php if(isset($links_array['android'])){ ?>
                        <a alt="Android Download Link" target="_blank" href="<?php echo esc_url($links_array['android']);?>" class="btn-link" style="margin-bottom:30px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5915 3.88444C13.6002 3.32107 14.7626 3 16 3C17.2374 3 18.3998 3.32107 19.4085 3.88444L20.1464 3.14645C20.3417 2.95118 20.6583 2.95118 20.8536 3.14645C21.0488 3.34171 21.0488 3.65829 20.8536 3.85355L20.2612 4.44595C21.9266 5.72558 23 7.73743 23 10H9C9 7.73743 10.0734 5.72558 11.7388 4.44595L11.1464 3.85355C10.9512 3.65829 10.9512 3.34171 11.1464 3.14645C11.3417 2.95118 11.6583 2.95118 11.8536 3.14645L12.5915 3.88444ZM14 7C14 7.55228 13.5523 8 13 8C12.4477 8 12 7.55228 12 7C12 6.44772 12.4477 6 13 6C13.5523 6 14 6.44772 14 7ZM19 8C19.5523 8 20 7.55228 20 7C20 6.44772 19.5523 6 19 6C18.4477 6 18 6.44772 18 7C18 7.55228 18.4477 8 19 8Z" fill="#87C527"/>
                                <path d="M5 12.5C5 11.6716 5.67157 11 6.5 11C7.32843 11 8 11.6716 8 12.5V18.5C8 19.3284 7.32843 20 6.5 20C5.67157 20 5 19.3284 5 18.5V12.5Z" fill="#87C527"/>
                                <path d="M12 24V27.5C12 28.3284 12.6716 29 13.5 29C14.3284 29 15 28.3284 15 27.5V24H17V27.5C17 28.3284 17.6716 29 18.5 29C19.3284 29 20 28.3284 20 27.5V24H21C22.1046 24 23 23.1046 23 22V11H9V22C9 23.1046 9.89543 24 11 24H12Z" fill="#87C527"/>
                                <path d="M24 12.5C24 11.6716 24.6716 11 25.5 11C26.3284 11 27 11.6716 27 12.5V18.5C27 19.3284 26.3284 20 25.5 20C24.6716 20 24 19.3284 24 18.5V12.5Z" fill="#87C527"/>
                            </svg>
                            <span>Android</span>
                        </a>
                        <?php } ?>

                        <?php if(isset($links_array['ios'])){ ?>
                        <a alt="iOS Download Link" target="_blank"  href="<?php echo esc_url($links_array['ios']);?>" class="btn-link" style="margin-bottom:30px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                              <path d="M30 16C30 23.728 23.735 30 16 30C8.265 30 2 23.728 2 16C2 8.265 8.265 2 16 2C23.735 2 30 8.265 30 16Z" fill="#283544"/>
                                <path d="M22.5621 12.4574C22.4857 12.502 20.6671 13.4425 20.6671 15.5279C20.7528 17.9061 22.9621 18.7401 23 18.7401C22.9621 18.7847 22.6665 19.8763 21.7907 21.0205C21.0956 22.0062 20.3242 23 19.1528 23C18.0385 23 17.6385 22.3431 16.3528 22.3431C14.972 22.3431 14.5813 23 13.5242 23C12.3528 23 11.5242 21.953 10.7913 20.9766C9.8391 19.6986 9.02978 17.6931 9.00121 15.7675C8.98195 14.7471 9.19189 13.744 9.72481 12.8921C10.477 11.7026 11.8198 10.8952 13.2863 10.8686C14.4099 10.8333 15.4099 11.5875 16.0956 11.5875C16.7528 11.5875 17.9814 10.8686 19.3714 10.8686C19.9714 10.8692 21.5714 11.0376 22.5621 12.4574ZM16.0006 10.6649C15.8006 9.73303 16.3528 8.80119 16.8671 8.20677C17.5242 7.48792 18.5621 7 19.4571 7C19.5143 7.93185 19.1522 8.84575 18.505 9.51136C17.9242 10.2302 16.9242 10.7714 16.0006 10.6649Z" fill="white"/>
                            </svg>
                            <span>iOS</span>
                        </a>
                        <?php } ?>

               
                    <?php } ?>

                </div>
                <?php the_content(); ?>
            </div>

        </div>
        <!-- platform /div -->

    <?php endwhile; ?>

    <?php endif; ?>

</main>

<?php get_footer(); ?>
