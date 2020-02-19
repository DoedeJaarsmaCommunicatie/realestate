<?php

namespace App\Providers;

use App\Controllers\Actions\PositionFilledAction;

class ActionServiceProvider implements ServiceProvider
{
	public function __construct () {
		$this->boot();
		$this->register();
	}

	public function boot ()
	{
		add_action('manage_vacature_posts_custom_column', [PositionFilledAction::class, 'action'], 10, 2);
	}

	public function register () {}

}
