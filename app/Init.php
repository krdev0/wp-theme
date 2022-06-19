<?php

namespace Bankroll;

use Timber\Timber;
use Bankroll\Traits\Singleton;

class Init {
	use Singleton;

	public function __construct() {
		Setup::get_instance();
		Assets::get_instance();

		Timber::$dirname = array( 'templates', 'views' );
		new Timber();
	}
}