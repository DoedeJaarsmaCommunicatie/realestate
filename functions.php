<?php
use Timber\Timber;

include_once get_stylesheet_directory() . '/vendor/autoload.php';

add_theme_support('custom-logo');


Timber::$locations = [
    get_stylesheet_directory() . '/templates/',
];


function custom_rewrite_tag()
{
	add_rewrite_tag('%branche%', '([^&]+)');
}

add_action('init', 'custom_rewrite_tag', 10, 0);

function custom_rewrite_rule()
{
	add_rewrite_rule('vacatures/page/?([0-9]{1,})/?$', 'index.php?post_type=vacature&paged=$matches[1]', 'top');

	add_rewrite_rule('vacatures/([^/]*)/regio/([^/]*)/page/?([0-9]{1,})/?', 'index.php?post_type=vacature&branche=$matches[1]&regio[]=$matches[2]&paged=$matches[3]', 'top');
	add_rewrite_rule('vacatures/([^/]*)/regio/([^/]*)/?', 'index.php?post_type=vacature&branche=$matches[1]&regio[]=$matches[2]', 'top');

	add_rewrite_rule('vacatures/([^/]*)/page/?([0-9]{1,})/?', 'index.php?post_type=vacature&branche=$matches[1]&paged=$matches[2]', 'top');
	add_rewrite_rule('vacatures/([^/]*)/?', 'index.php?post_type=vacature&branche=$matches[1]', 'top');
}

add_action('init', 'custom_rewrite_rule', 10, 0);

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
