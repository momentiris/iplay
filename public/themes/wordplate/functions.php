<?php

declare(strict_types=1);

// Register plugin helpers.
require template_path('includes/plugins/plate.php');

// Set theme defaults.
add_action('after_setup_theme', function () {
    // Show the admin bar.
    show_admin_bar(false);

    // Add post thumbnails support.
    add_theme_support('post-thumbnails');

    // Add title tag theme support.
    add_theme_support('title-tag');

    // Add HTML5 support.
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'widgets',
    ]);

    // Add primary WordPress menu.
    register_nav_menu('primary-menu', __('Primary Menu', 'wordplate'));
});

// Enqueue and register scripts the right way.
add_action('wp_enqueue_scripts', function () {
    wp_deregister_script('jquery');

    wp_enqueue_style('wordplate', mix('styles/app.css'));

    wp_register_script('wordplate', mix('scripts/app.js'), '', '', true);
    wp_enqueue_script('wordplate');
});

// Remove JPEG compression.
add_filter('jpeg_quality', function () {
    return 100;
}, 10, 2);

// Set custom excerpt more.
add_filter('excerpt_more', function () {
    return '...';
});

// Set custom excerpt length.
add_filter('excerpt_length', function () {
    return 101;
});

// Register superuser custom post type.
require get_template_directory().'/includes/post-types/super-user.php';

// Register role custom post type.
require get_template_directory().'/includes/post-types/role.php';

// Register acf for home.
require get_template_directory().'/includes/acf/home.php';

// Register acf for superusers.
require get_template_directory().'/includes/acf/superusers.php';

add_action( 'wp_head', 'inc_manifest_link' );

// Creates the link tag
function inc_manifest_link() {
        echo '<link rel="manifest" href="/manifest.json">';
}

// Register tags for superusers CPT.
add_action( 'init', 'gp_register_taxonomy_for_object_type' );
function gp_register_taxonomy_for_object_type() {
    register_taxonomy_for_object_type( 'post_tag', 'superuser' );
};


function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {

		height:65px;
		width:150px;
		background-size: contain;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }

		body.login {
			background: black;
		}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
