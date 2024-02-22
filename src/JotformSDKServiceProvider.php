<?php

namespace ChrisReedIO\JotformSDK;

use ChrisReedIO\JotformSDK\Commands\JotformSDKCommand;
use JotForm;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasConfigFile();
        // ->hasViews()
        // ->hasMigration('create_laravel-jotform-sdk_table')
        // ->hasCommand(JotformSDKCommand::class);
    }

    public function packageRegistered(): void
    {
        $this->app->singleton(JotForm::class, function () {
            return new Jotform(config('jotform-sdk.api_key'));
        });
    }
}
