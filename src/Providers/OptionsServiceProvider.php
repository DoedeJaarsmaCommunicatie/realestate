<?php

namespace App\Providers;

class OptionsServiceProvider implements ServiceProvider
{
	public function __construct () {
		$this->boot();
	}

	public function boot(): void
	{
		if (!function_exists('acf_add_options_page')) {
			return;
		}

		if (!is_admin()) {
			return;
		}

		$this->register();
	}

	public function register(): void
	{
		$this->addOptionsPage();
		$this->subPagePages();
	}

	protected function addOptionsPage (): void
	{
		\acf_add_options_page(
			[
				'page_title'    => 'Theme options',
				'menu_title'    => 'Theme options',
				'menu_slug'     => 'theme-options-main',
				'capability'    => 'edit_posts',
				'redirect'      => false
			]
		);
	}

	protected function subPagePages(): void
	{
		\acf_add_options_sub_page(
			[
				'parent_slug'       => 'theme-options-main',
				'page_title'        => 'Mailchimp settings',
				'menu_title'        => 'Mailchimp'
			]
		);
	}
}
