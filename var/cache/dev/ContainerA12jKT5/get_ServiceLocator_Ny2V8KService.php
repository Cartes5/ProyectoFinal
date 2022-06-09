<?php

namespace ContainerA12jKT5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ny2V8KService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ny2_v8K' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ny2_v8K'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'incidencia' => ['privates', '.errored..service_locator.ny2_v8K.App\\Entity\\Incidencias', NULL, 'Cannot autowire service ".service_locator.ny2_v8K": it references class "App\\Entity\\Incidencias" but no such service exists.'],
            'incidenciasRepository' => ['privates', 'App\\Repository\\IncidenciasRepository', 'getIncidenciasRepositoryService', true],
        ], [
            'incidencia' => 'App\\Entity\\Incidencias',
            'incidenciasRepository' => 'App\\Repository\\IncidenciasRepository',
        ]);
    }
}