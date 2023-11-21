<?php

namespace Marvinosswald\FilamentInputSelectAffix;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentInputSelectAffixServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-input-select-affix';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
        ->hasViews();
    }
}
