<?php

namespace ContainerPolidMf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XdSFLsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xdSFLs_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xdSFLs_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CochesController::delete' => ['privates', '.service_locator.JxG0mUz', 'get_ServiceLocator_JxG0mUzService', true],
            'App\\Controller\\CochesController::edit' => ['privates', '.service_locator.JxG0mUz', 'get_ServiceLocator_JxG0mUzService', true],
            'App\\Controller\\CochesController::index' => ['privates', '.service_locator.XTGUEhe', 'get_ServiceLocator_XTGUEheService', true],
            'App\\Controller\\CochesController::new' => ['privates', '.service_locator.XTGUEhe', 'get_ServiceLocator_XTGUEheService', true],
            'App\\Controller\\CochesController::show' => ['privates', '.service_locator.lzgqbUE', 'get_ServiceLocator_LzgqbUEService', true],
            'App\\Controller\\EmpleadosController::delete' => ['privates', '.service_locator.Lidw8U4', 'get_ServiceLocator_Lidw8U4Service', true],
            'App\\Controller\\EmpleadosController::edit' => ['privates', '.service_locator.Lidw8U4', 'get_ServiceLocator_Lidw8U4Service', true],
            'App\\Controller\\EmpleadosController::index' => ['privates', '.service_locator.AjeKrod', 'get_ServiceLocator_AjeKrodService', true],
            'App\\Controller\\EmpleadosController::new' => ['privates', '.service_locator.AjeKrod', 'get_ServiceLocator_AjeKrodService', true],
            'App\\Controller\\EmpleadosController::show' => ['privates', '.service_locator.hXbNXzP', 'get_ServiceLocator_HXbNXzPService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\CochesController:delete' => ['privates', '.service_locator.JxG0mUz', 'get_ServiceLocator_JxG0mUzService', true],
            'App\\Controller\\CochesController:edit' => ['privates', '.service_locator.JxG0mUz', 'get_ServiceLocator_JxG0mUzService', true],
            'App\\Controller\\CochesController:index' => ['privates', '.service_locator.XTGUEhe', 'get_ServiceLocator_XTGUEheService', true],
            'App\\Controller\\CochesController:new' => ['privates', '.service_locator.XTGUEhe', 'get_ServiceLocator_XTGUEheService', true],
            'App\\Controller\\CochesController:show' => ['privates', '.service_locator.lzgqbUE', 'get_ServiceLocator_LzgqbUEService', true],
            'App\\Controller\\EmpleadosController:delete' => ['privates', '.service_locator.Lidw8U4', 'get_ServiceLocator_Lidw8U4Service', true],
            'App\\Controller\\EmpleadosController:edit' => ['privates', '.service_locator.Lidw8U4', 'get_ServiceLocator_Lidw8U4Service', true],
            'App\\Controller\\EmpleadosController:index' => ['privates', '.service_locator.AjeKrod', 'get_ServiceLocator_AjeKrodService', true],
            'App\\Controller\\EmpleadosController:new' => ['privates', '.service_locator.AjeKrod', 'get_ServiceLocator_AjeKrodService', true],
            'App\\Controller\\EmpleadosController:show' => ['privates', '.service_locator.hXbNXzP', 'get_ServiceLocator_HXbNXzPService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\CochesController::delete' => '?',
            'App\\Controller\\CochesController::edit' => '?',
            'App\\Controller\\CochesController::index' => '?',
            'App\\Controller\\CochesController::new' => '?',
            'App\\Controller\\CochesController::show' => '?',
            'App\\Controller\\EmpleadosController::delete' => '?',
            'App\\Controller\\EmpleadosController::edit' => '?',
            'App\\Controller\\EmpleadosController::index' => '?',
            'App\\Controller\\EmpleadosController::new' => '?',
            'App\\Controller\\EmpleadosController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\CochesController:delete' => '?',
            'App\\Controller\\CochesController:edit' => '?',
            'App\\Controller\\CochesController:index' => '?',
            'App\\Controller\\CochesController:new' => '?',
            'App\\Controller\\CochesController:show' => '?',
            'App\\Controller\\EmpleadosController:delete' => '?',
            'App\\Controller\\EmpleadosController:edit' => '?',
            'App\\Controller\\EmpleadosController:index' => '?',
            'App\\Controller\\EmpleadosController:new' => '?',
            'App\\Controller\\EmpleadosController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}