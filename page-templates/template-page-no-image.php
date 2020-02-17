<?php
/**
 * Template name: No header image
 * Description: A template without an image
 */

use Timber\Post;
use Timber\Timber;
use App\Helpers\Template;

$context         = Timber::get_context();
$post            = new Post();
$context['post'] = $post;

$templates = [
	Template::viewTwigFile('page-no-img/' . $post->slug),
	Template::viewTwigFile('page-no-img'),
];

Timber::render($templates, $context );
