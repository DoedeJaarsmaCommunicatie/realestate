<?php

namespace App\Controllers\Shortcodes;

use Timber\Timber;
use App\Helpers\Template;

class OpenSollicitatie implements Shortcode
{
    public static function register($args)
    {
    	$context = Timber::get_context();
    	$templates = [
    		Template::partialTwigFile('vacancy/form-open-sollicitatie'),
	    ];

	    return Timber::compile($templates, $context);
    }
}
