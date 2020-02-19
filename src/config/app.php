<?php
namespace App;

use App\Providers\MenuServiceProvider;
use App\Providers\AssetServiceProvider;
use App\Providers\FilterServiceProvider;
use App\Providers\ActionServiceProvider;
use App\Providers\ContentServiceProvider;
use App\Providers\OptionsServiceProvider;
use App\Providers\RewriteServiceProvider;

return [
	'providers'     => [
	    MenuServiceProvider::class,
		AssetServiceProvider::class,
		ContentServiceProvider::class,
		OptionsServiceProvider::class,
		RewriteServiceProvider::class,
		FilterServiceProvider::class,
		ActionServiceProvider::class
    ]
];
