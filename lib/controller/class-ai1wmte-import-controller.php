<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Kangaroos cannot jump here' );
}

class Ai1wmte_Import_Controller {

	public static function pro() {
		return Ai1wm_Template::get_content( 'import/pro', array(), AI1WMTE_TEMPLATES_PATH );
	}

	public static function max_chunk_size() {
		return min(
			ai1wm_parse_size( ini_get( 'post_max_size' ), AI1WM_MAX_CHUNK_SIZE ),
			ai1wm_parse_size( ini_get( 'upload_max_filesize' ), AI1WM_MAX_CHUNK_SIZE ),
			ai1wm_parse_size( AI1WM_MAX_CHUNK_SIZE )
		);
	}
}
