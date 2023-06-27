<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $container) {
    // PHP equivalent of config/packages/framework.yaml
    $container->extension('framework', [
        'secret' => '%env(resolve:APP_SECRET)%',
        'test' => true,
        'default_locale' => 'en',
    ]);
};