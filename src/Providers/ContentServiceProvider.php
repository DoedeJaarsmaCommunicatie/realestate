<?php

namespace App\Providers;

class ContentServiceProvider implements ServiceProvider
{
	public function boot () {
		add_filter('timber_context', [$this, 'addOptions']);
	}

	public function addOptions($context)
	{
		$context['options'] = get_fields('option');
		$context['app'] ['request'] = $_REQUEST;

		return $context;
	}

	public function register () {}

}
