<?php
/**
 * Created by PhpStorm.
 * User: Mitch
 * Date: 15-11-2018
 * Time: 20:23
 */

use Timber\Post;
use Timber\Timber;
use App\Helpers\Template;
use App\Factory\VacancyFactory;

$context                           = Timber::get_context();
$context['post']                   = new Post();

$branches = Timber::get_terms([
	'taxonomy' => 'branche',
	'orderby' => 'id',
	'order' => 'ASC'
]);

foreach ($branches as $key => $branch) {
	if ($branch->slug === 'makelaar') {
		unset($branches[$key]);
		array_unshift($branches, $branch);
	}
}

$branches = array_filter($branches, static function ($item) {
	return $item instanceof \Timber\Term;
});


$context['branches'] = $branches;

Timber::render(Template::viewTwigFile('front-page'), $context);
