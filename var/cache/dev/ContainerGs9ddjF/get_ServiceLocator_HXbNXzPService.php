<?php

namespace ContainerGs9ddjF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HXbNXzPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hXbNXzP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hXbNXzP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'empleado' => ['privates', '.errored..service_locator.hXbNXzP.App\\Entity\\Empleados', NULL, 'Cannot autowire service ".service_locator.hXbNXzP": it references class "App\\Entity\\Empleados" but no such service exists.'],
        ], [
            'empleado' => 'App\\Entity\\Empleados',
        ]);
    }
}
