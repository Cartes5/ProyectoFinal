<?php

namespace Container6mGQxyV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4dCSZqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4d_cSZq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4d_cSZq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'control' => ['privates', '.errored..service_locator.4d_cSZq.App\\Entity\\Control', NULL, 'Cannot autowire service ".service_locator.4d_cSZq": it references class "App\\Entity\\Control" but no such service exists.'],
            'controlRepository' => ['privates', 'App\\Repository\\ControlRepository', 'getControlRepositoryService', true],
        ], [
            'control' => 'App\\Entity\\Control',
            'controlRepository' => 'App\\Repository\\ControlRepository',
        ]);
    }
}
