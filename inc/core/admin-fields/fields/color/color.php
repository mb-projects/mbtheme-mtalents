<?php

/**
 * Text field
 */
class MBDL_Admin_Field_Color extends MBDL_Admin_Field {

	protected $basename = 'color';

	/**
	 * Display input field
	 */
	public function display( $field, $value = '' ) {
		?>
		<input type="text" class="widefat mbaf-color-field" value="<?php echo esc_attr( $value ); ?>" name="<?php echo $this->prefix . esc_attr( $field[ 'id' ] ) ?>" />
		<?php
	}

	/**
	 * Enqueue scripts
	 */
	public function scripts() {
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script( 'mbtheme_admin_field_color', $this->getUrl() . '/js/script.js', array( 'wp-color-picker' ), false, true );
	}

}
