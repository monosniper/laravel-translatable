<?php

namespace Monosniper\LaravelTranslatable;

use Livewire\Livewire;
use Livewire\Mechanisms\ComponentRegistry;
use Monosniper\LaravelTranslatable\Livewire\Translate;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelTranslatableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-translatable')
            ->hasConfigFile()
            ->hasAssets()
            ->hasRoute('web')
            ->hasViews()
            ->hasInstallCommand(function(InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->publishAssets();
            });
    }

    public function bootingPackage(): void
    {
        Livewire::component(app(ComponentRegistry::class)->getName(Translate::class), Translate::class);
    }
}
