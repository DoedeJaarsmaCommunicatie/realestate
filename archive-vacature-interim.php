<?php
global $params;

use Timber\Post;
use Timber\Timber;
use Timber\PostQuery;
use App\Helpers\Template;

$accepted_vakgebieden = ['Legal', 'Vastgoed', 'Makelaardij', 'Finance'];
$accepted_organisations = [];

$templates = [
	Template::viewHtmlTwigFile('archive/vacature/interim'),
	Template::viewTwigFile('archive-vacature')
];

$context = Timber::get_context();
$context['posts'] = new PostQuery();
$context['selected_branch'] = Timber::get_term(get_term_by('slug', 'interim', 'branche'));
$context['selected_vakgebieden'] = explode(',', $params['vg']?? '');
$context['selected_organisations'] = explode(',', $params['org']?? '');
$context['selected_regions'] = explode(',', $params['reg']?? '');

$context['regions'] = get_terms(['taxonomy' => 'regio', 'orderby' => 'name', 'hide_empty' => true,]);
$context['vakgebieden'] = get_terms(['taxonomy' => 'vakgebied', 'orderby' => 'name', 'hide_empty' => true, 'name' => $accepted_vakgebieden]);
//$context['organisations'] = get_terms(['taxonomy' => 'organisatie', 'orderby' => 'name', 'hide_empty' => true, 'name' => $accepted_organisations]);
$context['organisations'] = [];

$context['query'] = $wp_query;
$context['post'] = new Post();

Timber::render($templates, $context);
