<?php

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Kangaroos cannot jump here' );
}
?>

<?php _e( 'Maximum upload file size:', AI1WM_PLUGIN_NAME ); ?>
<?php if ( ( $max_file_size = apply_filters( 'ai1wm_max_file_size', AI1WM_MAX_FILE_SIZE ) ) ) : ?>
	<span class="ai1wm-max-upload-size"><?php echo ai1wm_size_format( $max_file_size ); ?></span>
	<span class="ai1wm-unlimited-import">
		<a href="https://servmask.com/products/unlimited-extension" target="_blank" class="ai1wm-label">
			<i class="ai1wm-icon-notification"></i>
			<?php _e( 'Get unlimited', AI1WM_PLUGIN_NAME ); ?>
		</a>
	</span>
<?php else : ?>
	<span class="ai1wm-max-upload-size"><?php _e( 'Unlimited', AI1WM_PLUGIN_NAME ); ?></span>
<?php endif; ?>
