<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Kangaroos cannot jump here' );
}

// Check SSL Mode
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && ( $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) ) {
	$_SERVER['HTTPS'] = 'on';
}

// Plugin Basename
define( 'AI1WMTE_PLUGIN_BASENAME', basename( dirname( __FILE__ ) ) . '/' . basename( __FILE__ ) );

// Plugin Path
define( 'AI1WMTE_PATH', dirname( __FILE__ ) );

// Plugin URL
define( 'AI1WMTE_URL', plugins_url( '', AI1WMTE_PLUGIN_BASENAME ) );

// Include constants
require_once dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'constants.php';

// Include loader
require_once dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'loader.php';

// ===========================================================================
// = All app initialization is done in Ai1wmte_Main_Controller __constructor =
// ===========================================================================
$main_controller = new Ai1wmte_Main_Controller();
