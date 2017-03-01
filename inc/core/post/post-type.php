<?php

/**
 * Custom Post Type
 */
class MBDL_Post_Type {

	/**
	 * @access protected
	 * 
	 * @see register_post_type()
	 */
	protected $post_type;

	/**
	 * @access	protected
	 * 
	 * @see		register_post_type()
	 * @link	https://codex.wordpress.org/Function_Reference/register_post_type
	 */
	protected $args;

	/**
	 * @access protected
	 * 
	 * @see register_post_type()
	 */
	public function __construct( $post_type, $args ) {
		$this->post_type = $post_type;
		$this->args		 = $args;
		
		// register post type
		add_action( 'init', array( $this, 'register' ) );
		
		// add instance to global variable
		$GLOBALS[ 'mbdl_post_types' ][ $this->post_type ] = $this;

	}

	/**
	 * Register post type
	 * 
	 * @uses register_post_type()
	 */
	public function register() {
		register_post_type( $this->post_type, $this->args );
	}

	/**
	 * Get posts
	 * 
	 * @param array $args WP_Query args
	 * 
	 * @link https://codex.wordpress.org/Template_Tags/get_posts
	 * 
	 * @return array Array of posts
	 */
	public function getPosts( $args ) {
		$default = array(
			'post_type' => $this->post_type
		);
		$args	 = wp_parse_args( $args, $default );

		return get_posts( $args );
	}
	
	/**
	 * get post
	 * 
	 * @param int | WP_Post $post Post ID or post object
	 * 
	 * @return object WP_Post
	 */
	public function getPost( $post = null ) {
		return get_post( $post );
	}

	/**
	 * Get array of post titles, 
	 * 
	 * @return array Collection of IDs and Titles
	 */
	public function getTitles( $args = array() ) {
		global $post;

		$default = array(
			'numberposts'	 => -1,
			'order'			 => 'ASC',
			'orderby'		 => 'title',
		);

		$args = wp_parse_args( $args, $default );

		$titles = array();

		$posts = $this->getPosts( $args );
		if ( $posts ) {
			foreach ( $posts as $post ) {
				setup_postdata( $post );
				$titles[ get_the_ID() ] = get_the_title();
			}
			wp_reset_postdata();
		}
		return $titles;
	}

}
