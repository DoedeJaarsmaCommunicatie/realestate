<?php

namespace App\Controllers\Actions;

class PositionFilledAction
{
	/**
	 * @param string  $column
	 * @param integer $post_id
	 *
	 * @return string|void
	 */
	public static function action($column, $post_id)
	{
		if ($column === 'position_filled') {
			global $post;

			if (!function_exists('get_field')) {
				return _e('ACF Not installed');
			}
			$field = \get_field('position_filled', $post->ID);

			if (!$field) {
				return _ex('Niet ingevuld', 'Vacancy overview', 'rer');
			}

			return _ex('Positie ingevuld', 'Vacancy overview', 'rer');
		}
	}
}
