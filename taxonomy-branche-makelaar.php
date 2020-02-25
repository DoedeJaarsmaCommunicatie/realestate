<?php
global $params;

use Timber\Post;
use Timber\Timber;
use Timber\PostQuery;
use App\Helpers\Template;

$accepted_vakgebieden = ['Commerciële binnendienst', 'Woningmakelaardij A-RMT/ K-RMT', 'Woningmakelaardij RMT/ RM', '(Kantoor)management', 'Bedrijfsmakelaardij', 'Taxeren RT', 'Nieuwbouw'];
$accepted_organisations = [
	'Woningmakelaar',
	'Bedrijfsmakelaardij',
	'Taxatiebureau',
];

$templates = [
	Template::viewHtmlTwigFile('archive/vacature/makelaar'),
	Template::viewTwigFile('archive-vacature')
];

$context = Timber::get_context();
$context['posts'] = new PostQuery();
$context['selected_branch'] = Timber::get_term(get_term_by('slug', 'makelaar', 'branche'));
$context['selected_regions'] = explode(',', $params['reg']?? '');
$context['selected_vakgebieden'] = explode(',', $params['vg']?? '');
$context['selected_organisations'] = explode(',', $params['org']?? '');

$context['regions'] = get_terms([
	'taxonomy' => 'regio',
	'orderby' => 'name',
	'hide_empty' => true,
]);

$context['vakgebieden'] = get_terms([
	'taxonomy'      => 'vakgebied',
	'orderby'       => 'name',
	'hide_empty'    => true,
	'name' => $accepted_vakgebieden
]);

$context['organisations'] = get_terms([
	'taxonomy'      => 'organisatie',
	'orderby'       => 'name',
	'hide_empty'    => true,
	'name' => $accepted_organisations
]);

$context['query'] = $wp_query;
$context['post'] = new Post();

Timber::render($templates, $context);
