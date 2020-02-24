<?php
use Timber\Timber;

define('RER_FUNCTIONS', __FILE__);

include_once get_stylesheet_directory() . '/vendor/autoload.php';

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

Timber::$locations = [
	get_stylesheet_directory() . '/templates/',
];

remove_action('template_redirect', 'redirect_canonical');

function my_pre_get_posts($query)
{
	// do not modify queries in the admin or homepage or feed
	if ($query->is_feed || is_admin() || is_front_page()) {
		return $query;
	}

	// only modify queries for 'vacature' post type
	if (isset($query->query_vars['post_type']) && $query->query_vars['post_type'] === 'vacature') {
		if (is_post_type_archive()) {
			$query->set('orderby', [
				'meta_value'    => 'ASC',
				'date'          => 'DESC'
			]);
			$query->set('meta_key', 'position_filled');
			// $query->set('order', 'ASC');
		} else {
			$query->set('orderby', 'meta_value');
			$query->set('meta_key', 'position_filled');
			$query->set('order', 'ASC');
		}
	}

	return $query;
}

add_action('pre_get_posts', 'my_pre_get_posts');

function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
