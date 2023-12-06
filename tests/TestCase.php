<?php

namespace Khurram554\MediaLibrary\SpatieMediaManager\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Khurram554\MediaLibrary\SpatieMediaManager\SpatieMediaManagerServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Khurram554\MediaLibrary\\SpatieMediaManager\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            SpatieMediaManagerServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_spatie-media-manager_table.php.stub';
        $migration->up();
        */
    }
}
