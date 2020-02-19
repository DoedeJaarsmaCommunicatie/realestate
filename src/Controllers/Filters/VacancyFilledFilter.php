<?php

namespace App\Controllers\Filters;

class VacancyFilledFilter
{
	/**
	 * @param array $columns
	 *
	 * @return array
	 */
	public static function filter($columns): array
	{
		$columns['position_filled'] = _x('Vacature ingevuld', 'Vacancy overview', 'rer');
		return $columns;
	}
}
