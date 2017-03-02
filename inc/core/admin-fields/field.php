<?php

abstract class MBDL_Admin_Field {

	protected $prefix = '';
	protected $basename = '';

	public function __construct( $prefix = '' ) {
		$this->prefix = $prefix;

		// enqueue scripts
		add_action( 'admin_enqueue_scripts', array( $this, 'scripts' ) );
	}

	abstract public function display( $field, $value = '' );

	protected function getUrl() {
		return MBTHEME_URI_CORE . '/admin-fields/fields/' . $this->basename;
	}

	/**
	 * Enqueue scripts
	 */
	public function scripts() {
		
	}

}
