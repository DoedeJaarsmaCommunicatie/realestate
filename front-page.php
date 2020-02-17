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
$context['vacatures'] = VacancyFactory::build()
	->setDefaults()
	->notFilled()
	->randomOrder()
	->fetch();

$context['branches'] = Timber::get_terms('branche');

Timber::render(Template::viewTwigFile('front-page'), $context);
