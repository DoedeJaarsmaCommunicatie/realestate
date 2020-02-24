<?php

namespace App\Providers;

class RewriteServiceProvider implements ServiceProvider
{
	protected $tags = [];
	public function __construct () {
//		add_action('init', [$this, 'register'], 10, 0);
		$this->boot();
	}

	public function boot(): void
	{
		include_once get_stylesheet_directory() . '/routes/realtor.php';
		include_once get_stylesheet_directory() . '/routes/vastgoed.php';
		include_once get_stylesheet_directory() . '/routes/interim.php';
		include_once get_stylesheet_directory() . '/routes/legal.php';
		include_once get_stylesheet_directory() . '/routes/finance.php';
	}

	public function register()
	{
		add_rewrite_tag('%branche%', '([^&]+)');
		add_rewrite_rule('vacatures/page/?([0-9]{1,})/?$', 'index.php?post_type=vacature&paged=$matches[1]', 'top');

		add_rewrite_rule('vacatures/([^/]*)/regio/([^/]*)/page/?([0-9]{1,})/?', 'index.php?post_type=vacature&branche=$matches[1]&regio[]=$matches[2]&paged=$matches[3]', 'top');
		add_rewrite_rule('vacatures/([^/]*)/regio/([^/]*)/?', 'index.php?post_type=vacature&branche=$matches[1]&regio[]=$matches[2]', 'top');

		add_rewrite_rule('vacatures/([^/]*)/page/?([0-9]{1,})/?', 'index.php?post_type=vacature&branche=$matches[1]&paged=$matches[2]', 'top');
		add_rewrite_rule('vacatures/([^/]*)/?', 'index.php?post_type=vacature&branche=$matches[1]', 'top');
	}

}
