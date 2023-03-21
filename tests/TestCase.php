<?php

declare(strict_types=1);

namespace Tests;

use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Orchestra\Testbench\TestCase as BaseTestCase;

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
            'Facade' => 'Matthewbdaly\LaravelPackageBoilerplate\Facade',
        ];
    }
}
