<?php
/**
 * Template name: No header image, no header
 * Description: A template without an image
 */

use Timber\Post;
use Timber\Timber;
use App\Helpers\Template;

$context         = Timber::get_context();
$post            = new Post();
$context['post'] = $post;

$templates = [
	Template::viewTwigFile('page-no-img-no-header-' . $post->slug),
	Template::viewTwigFile('page-no-img-no-header'),
];

Timber::render($templates, $context );
