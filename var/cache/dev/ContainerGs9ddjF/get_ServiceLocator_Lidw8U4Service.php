<?php

namespace ContainerGs9ddjF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Lidw8U4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Lidw8U4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Lidw8U4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'empleado' => ['privates', '.errored..service_locator.Lidw8U4.App\\Entity\\Empleados', NULL, 'Cannot autowire service ".service_locator.Lidw8U4": it references class "App\\Entity\\Empleados" but no such service exists.'],
            'empleadosRepository' => ['privates', 'App\\Repository\\EmpleadosRepository', 'getEmpleadosRepositoryService', true],
        ], [
            'empleado' => 'App\\Entity\\Empleados',
            'empleadosRepository' => 'App\\Repository\\EmpleadosRepository',
        ]);
    }
}
