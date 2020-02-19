<?php
namespace App\Providers;

class AppServiceProvider implements ServiceProvider
{
	protected $providers;
	public function __construct()
	{
		$providers = include get_stylesheet_directory() . '/src/config/app.php';
		$this->providers = $providers['providers'];
		$this->boot();
		$this->register();
	}

	public function boot(): void
	{
		foreach ($this->providers as $provider) {
			new $provider();
		}
	}

	public function register(): void
	{
		add_action('admin_init', [$this, 'checkForUpdate']);
	}

	public function checkForUpdate(): void
	{
		\Puc_v4_Factory::buildUpdateChecker(
			'https://github.com/DoedeJaarsmaCommunicatie/realestate',
			RER_FUNCTIONS,
			'realestate'
		);
	}


}
