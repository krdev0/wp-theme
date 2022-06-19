<?php

namespace Bankroll;

use Bankroll\Traits\Singleton;

class Assets {
	use Singleton;

	public function __construct() {
		$this->setupHooks();
	}

	protected function setupHooks() {
		add_action( 'wp_enqueue_scripts', [ $this, 'registerStyles' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'registerScripts' ] );
	}

	public function registerStyles() {
		wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/public/dist/style.css' );

		//Dequeue styles
		wp_dequeue_style( 'global-styles' );
		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style( 'wp-block-library-theme' );
		wp_dequeue_style( 'wc-block-style' );
	}

	public function registerScripts() {
		//Enqueue Scripts
		wp_deregister_script( 'jquery' );
	}


}