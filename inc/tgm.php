<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Alpha for publication on ThemeForest
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */


require_once get_theme_file_path( '/lib/class-tgm-plugin-activation.php' );

add_action( 'tgmpa_register', 'alpha_register_required_plugins' );
function alpha_register_required_plugins() {

	$plugins = array(



		array(
			'name'      => 'ACF',
			'slug'      => 'advanced-custom-fields',
			'required'  => false,
		),
		array(
			'name'      => 'CMB - 2',
			'slug'      => 'cmb2',
			'required'  => false,
		),
		array(
			'name'      => 'CMB - 2 Conditionals',
			'slug'      => 'cmb2-conditionals',
			'source'    => 'https://github.com/jcchavezs/cmb2-conditionals/archive/master.zip',
		),

	);


	$config = array(
		'id'           => 'alpha',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
