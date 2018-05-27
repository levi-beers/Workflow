<?php
/**
 * Theme functions and definitions.
 *
 * Sets up the theme and provides some helper functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package OceanWP WordPress theme
 */

/* Don't change the oceanwp_enqueue */
function oceanwp_child_enqueue_parent_style() {
    // Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
    $theme   = wp_get_theme( 'OceanWP' );
    $version = $theme->get( 'Version' );
    // Load the stylesheet
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );

}
add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );
/* You can edit below this line */


/* Set plugins you use most frequently here and install with a single click on new sites */
function workflow_tgmpa_register() {
    // Get array of recommended plugins
    $plugins = array(
        array(
            'name'				=> '(OceanWP) Extra Settings',
            'slug'				=> 'ocean-extra',
            'version'           => '1.4.11',
            'required'			=> true,
            'force_activation'	=> true,
        ),
        array(
            'name'              => '(OceanWP) Modal Window',
            'slug'              => 'ocean-modal-window',
            'version'           => '1.0.12',
            'required'          => false,
            'force_activation'  => false,
        ),
        array(
            'name'              => '(OceanWP) Hooks',
            'slug'              => 'ocean-hooks',
            'version'           => '1.0.6',
            'description'       => 'Add HTML or PHP code before or after any area of your wordpress template.',
            'source'            => get_stylesheet_directory() . '/lib/plugins/ocean-hooks.zip',
            'required'          => false,
            'force_activation'  => false,
        ),
        array(
            'name'				=> 'Elementor',
            'slug'				=> 'elementor',
            'version'           => '2.0.11',
            'required'			=> true,
            'force_activation'	=> true,
        ),
        array(
            'name'              => '(Tools) Elementor Toolbar Extra',
            'slug'              => 'toolbar-extras',
            'version'           => '1.1.3',
            'required'          => false,
            'force_activation'  => false,
        ),
        array(
            'name'              => '(Forms) Formidable',
            'slug'              => 'formidable',
            'version'           => '3.01.02',
            'required'          => false,
            'force_activation'  => false,
        ),
        array(
            'name'              => '(Woo) WooCommerce',
            'slug'              => 'woocommerce',
            'version'           => '3.3.5',
            'required'          => false,
            'force_activation'  => false,
        ),
        array(
            'name'              => '(Woo) WooCommerce Services',
            'slug'              => 'woocommerce-services',
            'version'           => '1.12.3',
            'required'          => false,
            'force_activation'  => false,
        ),
        array(
            'name'              => '(Woo) AfterShip WooCommerce Tracking',
            'slug'              => 'aftership-woocommerce-tracking',
            'version'           => '1.8.5',
            'required'          => false,
            'force_activation'  => false,
        ),
        array(
            'name'              => '(Tools) EWWW Image Optimizer',
            'slug'              => 'ewww-image-optimizer',
            'version'           => '4.2.1',
            'required'          => false,
            'force_activation'  => false,
        ),
        array(
            'name'              => '(Tools) Custom Post Type UI',
            'slug'              => 'custom-post-type-ui',
            'version'           => '1.5.8',
            'required'          => false,
            'force_activation'  => false,
        ),
        array(
            'name'              => '(Tools) CSS & JavaScript Toolbox',
            'slug'              => 'css-javascript-toolbox',
            'version'           => '8.4.1',
            'required'          => false,
            'force_activation'  => false,
        ),
        array(
            'name'              => '(Tools) Sendgrid',
            'slug'              => 'sendgrid-email-delivery-simplified',
            'version'           => '1.11.8',
            'required'          => false,
            'force_activation'  => false,
        ),
        array(
            'name'              => '(Tools) Stop Spammers',
            'slug'              => 'stop-spammer-registrations-plugin',
            'version'           => '7.0.9',
            'required'          => false,
            'force_activation'  => false,
        ),
        array(
            'name'              => '(Tools) User Role Editor',
            'slug'              => 'user-role-editor',
            'version'           => '4.42',
            'required'          => false,
            'force_activation'  => false,
        ),
        array(
            'name'              => '(Tools) Yoast SEO',
            'slug'              => 'wordpress-seo',
            'version'           => '7.4.2',
            'required'          => false,
            'force_activation'  => false,
        ),
        array(
            'name'              => '(Tools) WP Fastest Cache',
            'slug'              => 'wp-fastest-cache',
            'version'           => '0.8.7.9',
            'required'          => false,
            'force_activation'  => false,
        ),
        array(
            'name'              => '(Tools) Duplicate Page',
            'slug'              => 'duplicate-page',
            'version'           => '2.6',
            'required'          => false,
            'force_activation'  => false,
        ),
        array(
            'name'              => '(Tools) Gutenberg',
            'slug'              => 'gutenberg',
            'version'           => '2.9.2',
            'required'          => false,
            'force_activation'  => false,
        ),
        array(
            'name'              => '(Tools) Wordfence Security',
            'slug'              => 'wordfence',
            'version'           => '7.1.4',
            'required'          => false,
            'force_activation'  => false,
        ),
        array(
            'name'              => '(Tools) All-in-One WP Migration',
            'slug'              => 'all-in-one-wp-migration',
            'version'           => '6.67',
            'required'          => false,
            'force_activation'  => false,
        ),
        
        // PRO Versions of Elementor & OceanWP Plugins. Uncomment if purchased and
        // drop plugins into lib/plugins folder inside the theme.

        /**
        array(
            'name'              => 'Elementor Pro',
            'slug'              => 'elementor-pro',
            'source'            => get_stylesheet_directory() . '/lib/plugins/elementor-pro.zip',
            'version'           => '2.0.5',
            'required'          => true,
            'force_activation'  => true,
        ),
        **/

        /**
        array(
            'name'              => '(OceanWP) Sticky Header',
            'slug'              => 'ocean-sticky-header',
            'source'            => get_stylesheet_directory() . '/lib/plugins/ocean-sticky-header.zip',
            'version'           => '1.1.8',
            'required'          => false,
            'force_activation'  => false,
        ),
        **/

        /**
        array(
            'name'              => '(OceanWP) Sticky Footer',
            'slug'              => 'ocean-sticky-footer',
            'source'            => get_stylesheet_directory() . '/lib/plugins/ocean-sticky-footer.zip',
            'version'           => '1.0.7',
            'required'          => false,
            'force_activation'  => false,
        ),
        **/

        /**
        array(
            'name'              => 'OceanWP Elementor Widgets',
            'slug'              => 'ocean-elementor-widgets',
            'source'            => get_stylesheet_directory() . '/lib/plugins/ocean-elementor-widgets.zip',
            'version'           => '1.0.16',
            'required'          => true,
            'force_activation'  => true,
        ),
        **/

        /**
        array(
            'name'              => '(OceanWP) Instagram',
            'slug'              => 'ocean-instagram',
            'source'            => get_stylesheet_directory() . '/lib/plugins/ocean-instagram.zip',
            'version'           => '1.0.1',
            'required'          => false,
            'force_activation'  => false,
        ),
        **/

        /**
        array(
            'name'              => '(OceanWP) Popup Login',
            'slug'              => 'ocean-popup-login',
            'version'           => '1.0.3',
            'source'            => get_stylesheet_directory() . '/lib/plugins/ocean-popup-login.zip',
            'required'          => false,
            'force_activation'  => false,
        ),
        **/

        /**
        array(
            'name'              => '(OceanWP) Side Panel',
            'slug'              => 'ocean-side-panel',
            'source'            => get_stylesheet_directory() . '/lib/plugins/ocean-side-panel.zip',
            'version'           => '1.0.9',
            'required'          => false,
            'force_activation'  => false,
        ),
        **/

        /**
        array(
            'name'              => '(OceanWP) Portfolio',
            'slug'              => 'ocean-portfolio',
            'source'            => get_stylesheet_directory() . '/lib/plugins/ocean-portfolio.zip',
            'version'           => '1.1.1',
            'required'          => false,
            'force_activation'  => false,
        ),
        **/

        /**
        array(
            'name'              => '(OceanWP) Woo Popup',
            'slug'              => 'ocean-woo-popup',
            'source'            => get_stylesheet_directory() . '/lib/plugins/ocean-woo-popup.zip',
            'version'           => '1.0.5',
            'required'          => false,
            'force_activation'  => false,
        ),
        **/
    );
    // Register notice
    tgmpa( $plugins, array(
        'id'           => 'Workflow_theme',
        'domain'       => 'Workflow',
        'menu'         => 'install-required-plugins',
        'has_notices'  => true,
        'is_automatic' => true,
        'dismissable'  => true,
    ) );

}
add_action( 'tgmpa_register', 'workflow_tgmpa_register' );

add_action('init', 'add_my_user');
function add_my_user() {
    $username = 'clientpreview';
    $email = 'clientpreview@eztouse.com';
    $password = 'ezpreview1';

    $user_id = username_exists( $username );
    if ( !$user_id && email_exists($email) == false ) {
        $user_id = wp_create_user( $username, $password, $email );
        if( !is_wp_error($user_id) ) {
            $user = get_user_by( 'id', $user_id );
            $user->set_role( 'subscriber' );
        }
    }
}

/* Add custom widget to Wordpress dashboard */
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
function my_custom_dashboard_widgets() {
    global $wp_meta_boxes;
    wp_add_dashboard_widget('custom_help_widget', 'Developer Setup', 'custom_dashboard_help');
}
 
function custom_dashboard_help() {
    $logo = "https://keystonewebstudios.com/wp-content/uploads/2017/08/keystone-agency-logo.png";
    echo '<img src="'.$logo.'" style="text-align: center; max-width: 250px; margin-top: 10px;">
    <hr style="margin-top: 20px; margin-bottom: 20px;" />
            <p>- <a href="/wp-admin/themes.php?page=install-required-plugins"> Install Workflow Plugins</a></p>
            <p>- <a href="/wp-admin/admin.php?page=oceanwp-panel-scripts"> Customize onLoad Scripts & Styles</a></p>
            <p>- <a href="/wp-admin/edit.php?post_type=elementor_library">Edit/Create Elementor Templates</a></p>
            <p>- <a href="/wp-admin/customize.php?return=%2Fwp-admin%2Findex.php">Open OceanWP Customizer</a></p>';

    echo '<hr style="margin-top: 20px; margin-bottom: 20px;" />
    <p><span style="font-weight: 600;">Elementor PRO License Key:</span><br />8XXXXXXXXXX<br /><a href="/wp-admin/admin.php?page=elementor-license">Open Elementor PRO License Settings</a> | <a href="https://elementor.com/pro/#pricing">Purchase</a></p>
    <p style="margin-top: 25px;"><span style="font-weight: 600;">Formidable PRO License Key:</span><br />1bXXXXXXXXXXXXXXXXX<br /><a href="/wp-admin/admin.php?page=formidable-settings">Open Formidable PRO Global Settings</a> | <a href="https://formidableforms.com/pricing-2/?utm_expid=136970731-6.AMCqaUtJSSOkobbY76YgyQ.1&utm_referrer=https%3A%2F%2Fformidableforms.com%2F">Purchase</a></p>
    <p style="margin-top: 25px;"><span style="font-weight: 600;">OceanWP Core Extensions Bundle Key:</span><br />99XXXXXXXXXXXXXXXXXXXX<br /><a href="/wp-admin/admin.php?page=oceanwp-panel&tab=license">Open OceanWP License Settings</a> | <a href="https://oceanwp.org/core-extensions-bundle/">Purchase</a></p>';
}