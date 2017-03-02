<?php

class MBTheme_Update {

	private $theme_name;
	private $theme_version;
	private $args;

	/**
	 * @access private
	 * @var	object	Instance of current class
	 */
	private static $instance;

	/**
	 * Private construct because of singleton
	 * @access private
	 */
	private function __construct() {
		
	}

	/**
	 * Private because of singleton
	 * @access private
	 */
	private function __clone() {
		
	}

	/**
	 * Private because of singleton
	 * @access private
	 */
	private function __wakeup() {
		
	}

	/**
	 * Returns instance of this class
	 * 
	 * @access public
	 * @return object instance of this class
	 */
	public static function getInstance( $args = array() ) {
		if ( self::$instance === null ) {
			self::$instance = new self();
			self::$instance->init( $args );
		}
		return self::$instance;
	}

	/**
	 * Initialize
	 * 
	 * @access protected
	 */
	protected function init( $args ) {

		// set name and version
		$my_theme			 = wp_get_theme();
		$this->theme_name	 = $my_theme->get( 'Name' );
		$this->theme_version = $my_theme->get( 'Version' );

		$this->args = wp_parse_args( $args, array(
			'url'	 => '',
			'github' => false,
		) );

		add_filter( 'pre_set_site_transient_update_themes', array( $this, 'updateTransient' ) );
	}

	/**
	 * Update transient theme
	 */
	public function updateTransient( $transient ) {
		if ( $this->args[ 'github' ] ) {
			$this->args[ 'url' ] = 'https://api.github.com/repos/' . $this->args[ 'github' ] . '/releases/latest';
		}

		if ( !$this->args[ 'url' ] ) {
			return $transient;
		}

		$response = $this->getResponse();
		if ( !$response ) {
			return $transient;
		}

		// set transient
		$transient->response[ $this->theme_name ] = $response;

		return $transient;
	}

	/**
	 * git json from url
	 */
	private function getResponse() {
		$request = wp_remote_request( $this->args[ 'url' ] );
		if ( is_wp_error( $request ) || wp_remote_retrieve_response_code( $request ) !== 200 ) {
			return false;
		}

		/*
		 * new_version, url, package
		 */
		$response = json_decode( $request[ 'body' ], true );
		if ( empty( $response ) ) {
			return false;
		}

		if ( $this->args[ 'github' ] ) {
			$response = $this->getGitHubResponse( $response );
		}

		if ( !isset( $response[ 'new_version' ] ) ) {
			return false;
		}

		if ( version_compare( $this->theme_version, $response[ 'new_version' ], '<' ) ) {
			return $response;
		}

		return false;
	}

	/**
	 * get json from github API
	 */
	private function getGitHubResponse( $response ) {
		// release name as version
		if ( !isset( $response[ 'name' ] ) ) {
			return $response;
		}
		$new_version = str_replace( 'v', '', $response[ 'name' ] );

		// package in assets
		if ( !isset( $response[ 'assets' ][ 0 ] ) && !isset( $response[ 'assets' ][ 0 ][ 'browser_download_url' ] ) ) {
			return $response;
		}
		$package = $response[ 'assets' ][ 0 ][ 'browser_download_url' ];

		$response_ = array();

		$response_[ 'new_version' ]	 = $new_version;
		$response_[ 'url' ]			 = $response[ 'html_url' ];
		$response_[ 'package' ]		 = $package;
		return $response_;
	}

}
