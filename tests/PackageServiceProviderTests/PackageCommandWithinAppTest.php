<?php

use GNAHotelSolutions\LaravelPackageTools\Package;
use GNAHotelSolutions\LaravelPackageTools\Tests\TestClasses\TestCommand;

trait ConfigurePackageCommandWithinAppTest
{
    public function configurePackage(Package $package)
    {
        $package
            ->name('laravel-package-tools')
            ->hasRoutes('web')
            ->hasCommand(TestCommand::class);
    }
}

uses(ConfigurePackageCommandWithinAppTest::class);

it('can execute a registered command in the context of the app', function () {
    $response = $this->get('execute-command');

    $response->assertSee('output of test command');
});
