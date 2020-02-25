<?php

namespace App\Controllers\Http\Vacancy;

class RealtorVacancyController extends VacancyController
{
	public static function route(array $params): void
	{
		$query = static::getParams(['makelaardij', 'makelaar']);

		if (isset($params['vg'])) {
			$query['tax_query'] []= [
				'taxonomy' => 'vakgebied',
				'field' => 'slug',
				'terms' => explode(',', $params['vg'])
			];
		}

		if (isset($params['org'])) {
			$query['tax_query'] [] = [
				'taxonomy' => 'organisatie',
				'field' => 'slug',
				'terms' => explode(',', $params['org'])
			];
		}

		if (isset($params['reg'])) {
			$query['tax_query'] [] =[
				'taxonomy' => 'regio',
				'field' => 'slug',
				'terms' => explode(',', $params['reg'])
			];
		}

		if (isset($_REQUEST['search'])) {
			$query['s'] = $_REQUEST['search'];
		}

		if (isset($params['pg'])) {
			$query['paged'] = $params['pg'];
		}

		\Routes::load('taxonomy-branche-makelaar.php', $params, $query);
	}
}
