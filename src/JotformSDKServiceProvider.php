<?php

namespace ChrisReedIO\JotformSDK;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ChrisReedIO\JotformSDK\Commands\JotformSDKCommand;

class JotformSDKServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-jotform-sdk')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-jotform-sdk_table')
            ->hasCommand(JotformSDKCommand::class);
    }
}
