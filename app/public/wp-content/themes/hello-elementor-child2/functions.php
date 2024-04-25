<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hello_elementor_child_scripts_styles() {

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );

add_filter('wpcf7_autop_or_not', '__return_false');










function planty_add_admin_link_to_nav_menu($items, $args) {



    //NavAdMIN 
    // Je vérifie si l'utilisateur est connecté

    if (is_user_logged_in()) {

        // Je vérifie si l'utilisateur a un rôle d'administrateur
        $user = wp_get_current_user();
        if (in_array('administrator', $user->roles)) {
            // J' ajoute le lien "admin" au menu
            $admin_link = '<li class="admin-link"><a class="admin-button" href="/wp-admin/">Admin</a></li>';

            // mettre au milieu de la nav
            $items_array = explode('</li>', $items);
            $middle_index = floor(count($items_array) / 2);

            // pour mettre le lien Admin au milieu de la nav 
            array_splice($items_array, $middle_index, 0, $admin_link);

            $items = implode('</li>', $items_array);
        }
    }

    return $items;
}

add_filter('wp_nav_menu_items', 'planty_add_admin_link_to_nav_menu', 10, 2);






