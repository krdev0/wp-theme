<?php

require_once __DIR__ . '/vendor/autoload.php';

use Bankroll\Init;

$config = [
	'name' => 'group1',
	'title' => 'My Group',
	'fields' => [
		[
			'label' => 'Subtitle',
			'name' => 'subtitle',
			'type' => 'text'
		]
	],
	'location' => [
		[
			[
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page'
			]
		]
	]
];

ACFComposer\ACFComposer::registerFieldGroup($config);

new Init();



