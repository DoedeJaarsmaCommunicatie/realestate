<?php
namespace App;

use App\Providers\MenuServiceProvider;
use App\Providers\AssetServiceProvider;
use App\Providers\ContentServiceProvider;
use App\Providers\OptionsServiceProvider;

return [
	'providers'     => [
	    MenuServiceProvider::class,
		AssetServiceProvider::class,
		ContentServiceProvider::class,
		OptionsServiceProvider::class
    ]
];
