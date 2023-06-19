<?php


namespace GNAHotelSolutions\LaravelPackageTools\Tests\TestPackage\Src;

use Closure;
use GNAHotelSolutions\LaravelPackageTools\Package;
use GNAHotelSolutions\LaravelPackageTools\PackageServiceProvider;

class ServiceProvider extends PackageServiceProvider
{
    public static ?Closure $configurePackageUsing = null;

    public function configurePackage(Package $package): void
    {
        $configClosure = self::$configurePackageUsing ?? function (Package $package) {
        };

        ($configClosure)($package);
    }
}
