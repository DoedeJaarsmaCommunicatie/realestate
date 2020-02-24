<?php

namespace App\Controllers\Http\Vacancy;

abstract class VacancyController
{
	/**
	 * @param string|array $branch
	 *
	 * @return array
	 */
	public static function getParams($branch = 'vastgoed')
	{
		return [
			'post_type' => 'vacature',
			'meta_query' => [
				'relation' => 'OR',
			],
			'tax_query' => [
				'relation' => 'AND',
				[
					'taxonomy' => 'branche',
					'terms' => $branch,
					'field' => 'slug'
				]
			],
			'posts_per_page' => 10,
		];
	}

	/**
	 * @param string|array $terms
	 * @param string       $taxonomy
	 * @param string       $field
	 * @param array        $query
	 *
	 * @return array
	 */
	private static function pushTaxQuery($terms, $taxonomy, $field = 'slug', &$query = [])
	{
		if (count($query) === 0) {
			return [
				'taxonomy' => $taxonomy,
				'field' => $field,
				'terms' => $terms
			];
		}

		$query['tax_query'] []= [
			'taxonomy' => $taxonomy,
			'field' => $field,
			'terms' => $terms
		];
	}
}
