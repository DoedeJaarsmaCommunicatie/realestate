<?php

namespace App\Factory;

class VacancyFactory
{
	private $args = [];

	public static function build(): self
	{
		return new static;
	}

	public function setDefaults(): self
	{
		$this->setArg('post_type', 'vacature');
		$this->setArg('posts_per_page', 3);

		return $this;
	}

	public function unlimitedPosts(): self
	{
		$this->setArg('posts_per_page', -1);
		return $this;
	}

	public function randomOrder(): self
	{
		$this->setArg('orderby', 'rand');
		$this->setArg('order', 'ASC');

		return $this;
	}

	public function notFilled(): self
	{
		$this->setArg('meta_query', [
			'relation' => 'OR',
			[
				'key' => 'position_filled',
				'compare' => '!=',
				'value' => 1,
				'type' => 'NUMERIC'
			],
			[
				'key' => 'position_filled',
				'compare' => 'NOT EXISTS'
			]
		]);

		return $this;
	}

	public function fetch()
	{
		return new \Timber\PostQuery($this->getArgs());
	}

	/**
	 * @return array
	 */
	public function getArgs (): array {
		return $this->args;
	}

	/**
	 * @param string $key
	 * @param mixed $value
	 */
	public function setArg($key, $value): void {
		$this->args[$key] = $value;
	}
}
