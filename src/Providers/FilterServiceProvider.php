<?php

namespace App\Providers;

use App\Controllers\Filters\VacancyFilledFilter;

class FilterServiceProvider implements ServiceProvider
{
	public function __construct () {
		$this->boot();
		$this->register();
	}

	public function boot ()
	{
		add_filter('manage_vacature_posts_columns', [VacancyFilledFilter::class, 'filter'], 10, 1);
	}

	public function register ()
	{
	}


}
