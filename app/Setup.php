<?php

namespace Bankroll;

use Bankroll\Traits\Singleton;

class Setup {
	use Singleton;

	public function __construct() {
		$this->makeHeadClean();

		//DISABLE GUTENBERG EDITOR
		add_filter('use_block_editor_for_post', '__return_false', 10);
		add_action( 'admin_init', [$this, 'hide_editor'] );
	}

	public function hide_editor() {
		remove_post_type_support( 'page', 'editor' );
	}

	public function makeHeadClean() {
		remove_action('wp_head', 'feed_links_extra', 3);
		remove_action('wp_head', 'rsd_link');
		remove_action('wp_head', 'wlwmanifest_link');
		remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
		remove_action('wp_head', 'wp_generator');
		remove_action('wp_head', 'wp_shortlink_wp_head', 10);
		remove_action('wp_head', 'print_emoji_detection_script', 7);
		remove_action('admin_print_scripts', 'print_emoji_detection_script');
		remove_action('wp_print_styles', 'print_emoji_styles');
		remove_action('admin_print_styles', 'print_emoji_styles');
		remove_action('wp_head', 'wp_oembed_add_discovery_links');
		remove_action('wp_head', 'wp_oembed_add_host_js');
		remove_action('wp_head', 'rest_output_link_wp_head', 10);
		remove_filter('the_content_feed', 'wp_staticize_emoji');
		remove_filter('comment_text_rss', 'wp_staticize_emoji');
		remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
	}
}