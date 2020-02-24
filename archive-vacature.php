<?php
global $wp_query;

use Timber\Post;
use Timber\Timber;
use Timber\PostQuery;
use App\Helpers\Template;

$templates = [Template::viewTwigFile('archive-vacature'),];

$context = Timber::get_context();

if (isset($_REQUEST['search'])) {
    $posts = new PostQuery(
        [
            's' => $_REQUEST['search'],
            'tax_query' => [
                [
                    'taxonomy'  => 'branche',
                    'terms'     => $wp_query->query_vars['branche'],
                    'field'      => 'slug'
                ]
            ]
        ]
    );
} else {
    $posts = new PostQuery();
}

$context['posts'] = $posts;

$context['regions'] = get_terms([
    'taxonomy'      => 'regio',
    'orderby'       => 'name',
    'hide_empty'    => true,
]);

$context['vakgebieden'] = get_terms([
    'taxonomy'      => 'vakgebied',
    'orderby'       => 'name',
    'hide_empty'    => true,
]);

$context['organisations'] = get_terms([
    'taxonomy'      => 'organisatie',
    'orderby'       => 'name',
    'hide_empty'    => true,
]);

$context['query'] = $wp_query;
$context['post'] = new Post();

if (isset($wp_query->query_vars['branche'])) {
	$context['selected_branch'] = Timber::get_term(get_term_by('slug', $wp_query->query_vars['branche'], 'branche'));
} else {
	$context['branch'] = false;
}

Timber::render($templates, $context);
