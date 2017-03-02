<?php

class MBDL_Meta_Box {

	protected $id;
	protected $options;
	protected $fields = array();
	protected $admin_form;

	/**
	 * @see add_meta_box()
	 * 
	 * @param string $id Meta box ID
	 */
	public function __construct( $id, $options, $fields = array() ) {
		$this->id		 = $id;
		$this->options	 = wp_parse_args( $options, array(
			'title'		 => 'Meta Box',
			'screens'	 => null, // string|array screens / post type
			'context'	 => 'advanced', // normal|side|advanced
			'priority'	 => 'default', // normal|side|advanced
		) );
		$this->fields	 = $fields;

		// add instance to global variable
		if ( isset( $GLOBALS[ 'mbdl_meta_box' ][ $this->id ] ) ) {
			wp_die( "Meta Box \"$id\" already exist" );
		}
		$GLOBALS[ 'mbdl_meta_box' ][ $this->id ] = $this;

		// add action to regiser meta box
		add_action( 'add_meta_boxes', array( $this, 'register' ) );
		// add action to save post meta
		add_action( 'save_post', array( $this, 'save' ) );

		$this->admin_form = new MBDL_Admin_Form( $this->fields, array(), $this->id );
	}

	/**
	 * Register Meta Box
	 */
	public function register() {
		add_meta_box( $this->id, $this->options[ 'title' ], array( $this, 'display' ), $this->options[ 'screen' ], $this->options[ 'context' ], $this->options[ 'priority' ] );
	}

	/**
	 * Display content in meta box
	 */
	public function display( $post ) {
		//error_log( print_r( $post, true ) );
		////
		// add nonce
		wp_nonce_field( $this->id, $this->id . '_wpnonce', false );
		$this->displayFields( $post );
	}

	/**
	 * Display Fields
	 */
	protected function displayFields( $post ) {
		// render admin form
		$values = $this->getValues( $post->ID );
		$this->admin_form->setValues( $values );
		$this->admin_form->render();
	}

	/**
	 * Add fields to meta box
	 */
//	public function addFields( $fields ) {
//		$this->fields = array_merge( $this->fields, $fields );
//	}

	/**
	 * Get single value by field id
	 */
	public function getValue( $post_id, $id ) {
		
	}

	/**
	 * Get all values of meta box
	 */
	public function getValues( $post_id ) {
		$value = array();
		foreach ( $this->fields as $field ) {
			if ( !isset( $field[ 'id' ] ) ) {
				continue;
			}
			$value[ $field[ 'id' ] ] = get_post_meta( $post_id, $this->id . '_' . $field[ 'id' ], true );
		}
		return $value;
	}

	/**
	 * Save all fields as post meta
	 */
	public function save( $post_id ) {
		//-- Begin - validate
		// just for this screens
		$post_type = get_post_type( $post_id );
		if ( !in_array( $post_type, (array) $this->options[ 'screen' ] ) ) {
			return;
		}

		// return if autosave
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}

		// check wpnonce
		if ( !isset( $_POST[ $this->id . '_wpnonce' ] ) || !wp_verify_nonce( $_POST[ $this->id . '_wpnonce' ], $this->id ) ) {
			return;
		}
		//-- End - validate
		/////
		//-- Begin - save
		$prefix = $this->id . '_';
		// iterate all fields
		foreach ( $this->fields as $field ) {
			// field id and request from post should exist
			if ( isset( $field[ 'id' ] ) && isset( $_POST[ $prefix . $field[ 'id' ] ] ) ) {
				$meta_key	 = $prefix . $field[ 'id' ];
				$value		 = $_POST[ $prefix . $field[ 'id' ] ];
				// update post meta
				update_post_meta( $post_id, $meta_key, $value );
			}
		}
	}

	public function get() {
		
	}

}
