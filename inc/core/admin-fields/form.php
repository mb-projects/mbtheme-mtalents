<?php

/**
 *
 */
class MBDL_Admin_Form {

	/**
	 * @access	protected	
	 * @var		array Collection of field type objects
	 */
	protected $field_types = array();

	/**
	 * @access	protected	
	 * @var		array Collection of fields
	 */
	protected $fields = array();

	/**
	 * @access	protected	
	 * @var		string prefix of field
	 */
	protected $prefix = '';

	/**
	 * @access	protected	
	 * @var		array Form args
	 */
	protected $args = array();

	/**
	 * 
	 */
	public function __construct( $fields, $values, $prefix = '', $args = array() ) {
		$this->prefix	 = ($prefix) ? $prefix . '_' : '';
		$this->fields	 = $this->fieldsFilter( (array) $fields );
		$this->values	 = (array) $values;
		$this->args		 = $args;
	}

	/**
	 * 
	 */
	private function fieldsFilter( $fields ) {
		$fields_ = array();
		foreach ( $fields as $field ) {
			if ( !isset( $field[ 'id' ] ) || !isset( $field[ 'type' ] ) ) {
				continue;
			}
//			$field = wp_parse_args( $field, array(
//				'title'	 => 'Title',
//				'desc'	 => '',
//			) );
			// field type object should exist
			if ( isset( $this->field_types[ $field[ 'type' ] ] ) ) {
				$fields_[ $field[ 'id' ] ] = $field;
			} elseif ( $this->load( $field ) ) {
				$fields_[ $field[ 'id' ] ] = $field;
			}
		}
		return $fields_;
	}

	/**
	 * Load field type class and get the instance of field type class
	 */
	private function load( $field ) {
		$type	 = $field[ 'type' ];
		$class	 = 'MBDL_Admin_Field_' . ucwords( str_replace( '-', '_', $type ), '_' );
		$path	 = dirname( __FILE__ ) . "/fields/$type/$type.php";

		if ( !file_exists( $path ) ) {
			return;
		}
		include_once $path;

		if ( !class_exists( $class ) ) {
			return;
		}
		// cache objects of field type
		$this->field_types[ $type ] = new $class( $this->prefix );

		return true;
	}

	/**
	 * Get fields 
	 */
	public function getFields() {
		return $this->fields;
	}

	/**
	 * Render all fields
	 */
	public function render() {
		if ( !is_array( $this->fields ) ) {
			return;
		}
		?>
		<table class="form-table">
			<tbody>
				<?php foreach ( $this->fields as $key => $field ) : ?>
					<tr>
						<th scope="row"><label><?php echo (isset( $field[ 'title' ] )) ? $field[ 'title' ] : ''; ?></label></th>
						<td>
							<?php
							$value = (isset( $this->values[ $key ] )) ? $this->values[ $key ] : '';
							$this->field_types[ $field[ 'type' ] ]->display( $field, $value );
							?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<?php
	}

}
