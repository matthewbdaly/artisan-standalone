<?php

namespace Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

class TestCase extends BaseTestCase
{
    use MockeryPHPUnitIntegration;

	protected function getPackageProviders($app)
	{
		return ['Matthewbdaly\LaravelPackageBoilerplate\ServiceProvider'];
	}

	protected function getPackageAliases($app)
	{
		return [
			'Facade' => 'Matthewbdaly\LaravelPackageBoilerplate\Facade'
		];
	}
}
