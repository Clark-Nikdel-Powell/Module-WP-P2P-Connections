<?php

class ClientPostConnections {

  /**
   * Public settings
   *
   * @since 0.1.0
   */
  public $settings = array();

  /**
   * Initial constructor
   *
   * @since 0.1.0
   */
  public function __construct( $args ) {

    $this->settings = $args;

    add_action( 'p2p_init', array( $this, 'p2p_connections' ) );

  }

  /**
	* Registers p2p connections
	*
	* @since 0.1.0
	*/
	public function p2p_connections() {

		// Check to make sure function exists first
		if ( !function_exists('p2p_register_connection_type') ) {
			return false;
		}

    if ( count($this->settings) == 0 ) {
      return false;
    }

    foreach ( $this->settings as $setting ) {
      p2p_register_connection_type( $setting );
    }

	}

}
