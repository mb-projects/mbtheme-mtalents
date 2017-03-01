<?php

/**
 * Text field
 */
class MBDL_Admin_Field_Text extends MBDL_Admin_Field {

	/**
	 * Display input field
	 */
	public function display( $field, $value = '' ) {
		?>
		<input type="text" class="widefat" value="<?php echo esc_attr( $value ); ?>" name="<?php echo $this->prefix . esc_attr( $field[ 'id' ] ) ?>" />
		<?php
	}

}
