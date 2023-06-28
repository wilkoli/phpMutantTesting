<?php

declare(strict_types=1);

namespace PhpMutantTesting\Infrastructure\Symfony;

use Bref\SymfonyBridge\BrefKernel;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\BundleInterface;

final class Kernel extends BrefKernel
{
    use MicroKernelTrait;

    /**
     * @return array<BundleInterface>
     */
    public function registerBundles(): array
    {
        return [
            new FrameworkBundle(),
        ];
    }

    protected function configureContainer(ContainerConfigurator $container): void
    {
        $frameworkConfigLoader = require __DIR__ . '/../../../config/framework.php';
        $frameworkConfigLoader($container->withPath(__DIR__ . '/../../../config/framework.php'));
        $servicesConfigLoader = require __DIR__ . '/../../../config/services.php';
        $servicesConfigLoader($container->withPath(__DIR__ . '/../../../config/services.php'));

        if (false === array_key_exists('APP_ENV', $_ENV)) {
            return;
        }

        if ($_ENV['APP_ENV'] === 'dev') {
            $devServicesLoader = require __DIR__ . '/../../../config/services.php';
            $devServicesLoader($container->withPath(__DIR__ . '/../../../config/services.php'));
        }
    }
}
