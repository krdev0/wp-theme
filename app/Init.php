<?php

namespace Bankroll;

use Timber\Timber;
use Bankroll\Traits\Singleton;

class Init {
	use Singleton;

	public function __construct() {
		Timber::$dirname = array( 'templates', 'views' );
		new Timber();

		Setup::get_instance();
		Assets::get_instance();
	}
}