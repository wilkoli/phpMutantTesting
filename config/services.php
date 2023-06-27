<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

/** @psalm-suppress UnusedClosureParam */
return static function (ContainerConfigurator $container) {
    $services = $container->services()
        ->defaults()
        ->autowire()
        ->autoconfigure()
    ;

    $services
        ->load('PhpMutantTesting\\Infrastructure\\', '../src/Infrastructure')
        ->autoconfigure()
        ->autowire()
    ;
};