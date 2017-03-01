<?php

class MBDL_Admin_Field_Textarea extends MBDL_Admin_Field {

	/**
	 * Display input field
	 */
	public function display( $field, $value = '' ) {
		?>
		<textarea class="widefat" name="<?php echo $this->prefix . esc_attr( $field[ 'id' ] ) ?>" rows="5"><?php echo esc_attr( $value ); ?></textarea>
		<?php
	}

}
