<?php

namespace App\Controllers\Shortcodes;

class OpenSollicitatie implements Shortcode
{
    public static function register($args)
    {
    	$context = \Timber\Timber::get_context();
	    return \Timber\Timber::compile('templates/parts/form-open-sollicitatie.twig', $context);
    }
}
