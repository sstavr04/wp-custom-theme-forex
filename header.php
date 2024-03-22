<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <?php 
            # Set the title
            $the_title = get_the_title() != '' ? "4XC | ". get_the_title() : "4XC | Online Social & CFD Trading | High Leverage | Low Spreads";
            if(is_archive()){
                $the_title =  "4XC | ".strip_tags(get_the_archive_title());
            }
        ?>
        <title><?php echo $the_title ?></title>
        <meta name="title" content="<?php echo $the_title; ?>">
        <meta name="description" content="<?php the_excerpt(); ?>">
        <?php wp_head(); ?>
    </head>
    <header>
        <div class="site-header">
            <!-- logo -->
            <a class="site-icon" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php
                    # Display the custom logo if it exists
                    # this enables user to change it from the admin panel
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    if ( has_custom_logo() ) {
                        echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                    } else {
                        echo '<h1>' . get_bloginfo('name') . '</h1>';
                    }
                ?>
            </a>

            <!-- Navigation Menu - Toggles between screen sizes -->
            <style>

            </style>
            <!-- Mobile menu toggler button -->
            <a href="javascript:void(0);" class="nav-4xc-toggler">
                <img alt="Menu Toggler" title="Menu" width="30px" height="30px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAAAAXNSR0IB2cksfwAAAAlwSFlzAAALEwAACxMBAJqcGAAAALRQTFRFAAAA5+fnKSkpEBAQDAwMEhISJiYm4uLiPz8/BQUFAgICBgYGPDw8SUlJAwMDVFRU5ubmKysrCwsLBwcHDg4ONzc37e3t7Ozs4uLiISEhFRUVFRUVFRUVLS0t09PTQEBABAQEODg4SkpKOzs76enpJSUlHh4eICAgHh4eQEBA5OTk6Ojo5+fnICAgCQkJBQUFIyMj4uLiQEBAOTk5ZGRkX19fLS0tGxsbExMTGxsbNjY23d3dWCTrOgAAADx0Uk5TAAaOzMzMagRO////Klr/NAOV2dnZfwAACpvj5uGGBFf/LU4nA3nU2dFtAwEEsubmlwNgM1EpZ7ezs1EDlXocsgAAAH9JREFUeJxjYBhAwMjEzIIDsLKxM3BwcuEE3DwMvHy4pTn5GQQEhYRxABFRsYH0NhCI45OUkJSSxgFkZOUY5BVw+5tPkUEJX7AoM6ioqqnjABqaWvTyPw6gjU9SR1dPHwfQMzBkMMLjbwVjBhN8icmUQdvM3AIHsLSyppf/sQEAi9sfAv5CGpwAAAAASUVORK5CYII="/>        
            </a>

            <div class="nav-4xc-desktop nav-4xc-container">
                <!-- Navigation menu - edited on admin panel -->
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'main-menu',
                        'container_class' => 'nav-4xc'
                    ) );
                ?>
            </div>
            <div class="nav-4xc-desktop nav-4xc-buttons">
                <a class="btn" href="<?php echo esc_url('#');?>" style="width:94px">Sign up</a>
            </div>
        </div>
    </header><!-- .site-header -->

    <body <?php body_class(); ?>>