<?php

namespace SundanceSolutions\LarachainTrimText;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use SundanceSolutions\LarachainTrimText\Commands\LarachainTrimTextCommand;

class LarachainTrimTextServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('larachain-trim-text')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_larachain-trim-text_table')
            ->hasCommand(LarachainTrimTextCommand::class);
    }
}
