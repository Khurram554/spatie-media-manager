<?php

namespace Khurram554\MediaLibrary\SpatieMediaManager;

use Khurram554\MediaLibrary\SpatieMediaManager\Commands\SpatieMediaManagerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SpatieMediaManagerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('spatie-media-manager')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_spatie-media-manager_table')
            ->hasCommand(SpatieMediaManagerCommand::class);
    }
}
