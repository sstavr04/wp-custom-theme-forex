<?php
/**
* PlatformsController
* This class controlls all functions related to the custom type Platforms
* Some functions include registering the custom post type, adding a metabox to save extra data etc
* 
*/
if ( ! defined( 'ABSPATH' ) ) exit;

Class PlatformsController {
    function __construct() {
        # Registering the Platforms custom post type
        add_action( 'init', array($this,'platform_registration') );

        # Load functionality for admin panel
        if (is_admin()){
             # Add metabox for extra fields
            add_action( 'add_meta_boxes',  array($this,'platform_meta_box' ));
            # Hook on save post to save extra fields 
            add_action( 'save_post', array($this,'platform_fields_save_data' ));
        }

        # Support thumbnail upload
        add_theme_support( 'post-thumbnails', array( 'platform' ) );

        # Change Archive Page title
        add_filter( 'get_the_archive_title', array($this,'platform_change_archive_title'), 11 );
    }
    
    # Registering the Platforms custom post type
    function platform_registration(){
        # Platform strings
        $labels = array(
            'name' => 'Platforms',
            'singular_name' => 'Platform',
            'add_new' => 'Add New Platform',
            'add_new_item' => 'Add New Platform',
            'edit_item' => 'Edit Platform',
            'new_item' => 'New Platform',
            'all_items' => 'All Platforms',
            'view_item' => 'View Platform',
            'search_items' => 'Search Platform',
            'not_found' =>  'No Platforms Found',
            'not_found_in_trash' => 'No Platforms found in Trash', 
            'menu_name' => 'Platforms',
        );
        
        # Platform registration arguments 
        $args = array(
            'labels' => $labels,
            'public' => true,
            'has_archive' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'rewrite' => array('slug' => 'platform'),
            'query_var' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            )
        );

        # Register custom post type Platform
        register_post_type( 'platform', $args );        
    }

    # Add metabox to give functionality of adding extra fields to post_meta on edit screen of platform
    function platform_meta_box() {
        add_meta_box(
            'platforms_fields',
            'Platforms Fields',
            array($this,'platform_fields_callback'),
            'platform'
        );
    }

    # Rendering of Platforms Metabox
    function platform_fields_callback($post){
        # Create a nonce field for security
        wp_nonce_field( 'platform_fields_save', 'platform_fields_nonce_field' );
    
        # Check if extra fields already exist in DB to show on input fields
        $description    = get_post_meta( $post->ID, 'platform_description', true );
        $links          = get_post_meta( $post->ID, 'platform_links', true );
        $links_array    = (array)json_decode($links);
        $windows        = "";
        $android        = "";
        $ios            = "";
        if( isset($links_array) && is_array($links_array) && count($links_array)>0 ){ 
            $windows = isset($links_array['windows']) ? $links_array['windows'] : "";
            $android = isset($links_array['android']) ? $links_array['android'] : "";
            $ios = isset($links_array['ios']) ? $links_array['ios'] : "";
        }
        ?>
        <label for="platform_description">Platform Description</label>
        <textarea style="width:100%" id="platform_description" name="platform_description"><?php echo esc_attr( $description ) ?></textarea>
        <label for="platform_windows_link">Windows Link</label>
        <input id="platform_windows_link" name="platform_windows_link" type="text" value="<?php echo esc_url( $windows ) ?>" style="width: 100%;" />

        <label for="platform_android_link">Android Link</label>
        <input id="platform_android_link" name="platform_android_link" type="text" value="<?php echo esc_url( $android ) ?>" style="width: 100%;"/>

        <label for="platform_ios_link">iOS Link</label>
        <input id="platform_ios_link" name="platform_ios_link" type="text" value="<?php echo esc_url( $ios ) ?>" style="width: 100%;"/>

        <?php 
    }

    # When the platform is saved, check for the extra fields data, validate them and save them
    function platform_fields_save_data( $post_id ) {

        # If this is an autosave, don't do anything.
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
            return;
        }

        # Validate nonce 
        if ( ! isset( $_POST['platform_fields_nonce_field'] ) || ! wp_verify_nonce( $_POST['platform_fields_nonce_field'], 'platform_fields_save' ) ) {
            return;
        }

        # Check the user's permissions.
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }

        # Validate platform description exists and not too long
        if (  isset( $_POST['platform_description'] ) &&  strlen($_POST['platform_description']) <= 255 ) {
            # Sanitize inserted description
            $description = sanitize_text_field( $_POST['platform_description'] );
            # Update platform description
            update_post_meta( $post_id, 'platform_description', $description );
        }

        # Validate platform links, if they exist add to links array
        # Links will be saved in one value json encoded to save db space
        $links = [];
        if (isset($_POST['platform_windows_link']) && filter_var($_POST['platform_windows_link'], FILTER_VALIDATE_URL) !== FALSE ) {
            $links['windows'] = filter_var($_POST['platform_windows_link'], FILTER_VALIDATE_URL);
        }
        
        if (isset($_POST['platform_ios_link']) && filter_var($_POST['platform_ios_link'], FILTER_VALIDATE_URL) !== FALSE ) {
            $links['ios'] = filter_var($_POST['platform_ios_link'], FILTER_VALIDATE_URL);
        }

        if (isset($_POST['platform_android_link']) && filter_var($_POST['platform_android_link'], FILTER_VALIDATE_URL) !== FALSE ) {
            $links['android'] = filter_var($_POST['platform_android_link'], FILTER_VALIDATE_URL);
        }

        # Delete previously saved value if new array of links is empty
        if(metadata_exists('platform', $post_id, 'platform_links') && !$links ) {
            delete_post_meta( $post_id, 'platform_links');
        }
        # if new links are inserted, update saved value
        if ($links){
            update_post_meta( $post_id, 'platform_links', json_encode($links) );
        }
    }

    # Change archive page title
    function platform_change_archive_title($title){
        if ( is_post_type_archive( 'platform' ) ) {
            return 'Platforms';
        }
        return $title;
    }
}