<?php

abstract class MBDL_Admin_Field {

	protected $prefix = '';

	public function __construct( $prefix = '' ) {
		$this->prefix = $prefix;
	}

	abstract public function display( $field, $value = '' );
}
