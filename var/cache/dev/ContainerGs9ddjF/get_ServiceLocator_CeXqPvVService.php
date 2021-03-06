<?php

namespace ContainerGs9ddjF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CeXqPvVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ceXqPvV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ceXqPvV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CochesController::delete' => ['privates', '.service_locator.JxG0mUz', 'get_ServiceLocator_JxG0mUzService', true],
            'App\\Controller\\CochesController::edit' => ['privates', '.service_locator.JxG0mUz', 'get_ServiceLocator_JxG0mUzService', true],
            'App\\Controller\\CochesController::index' => ['privates', '.service_locator.XTGUEhe', 'get_ServiceLocator_XTGUEheService', true],
            'App\\Controller\\CochesController::new' => ['privates', '.service_locator.XTGUEhe', 'get_ServiceLocator_XTGUEheService', true],
            'App\\Controller\\CochesController::show' => ['privates', '.service_locator.lzgqbUE', 'get_ServiceLocator_LzgqbUEService', true],
            'App\\Controller\\ControlController::delete' => ['privates', '.service_locator.4d_cSZq', 'get_ServiceLocator_4dCSZqService', true],
            'App\\Controller\\ControlController::edit' => ['privates', '.service_locator.4d_cSZq', 'get_ServiceLocator_4dCSZqService', true],
            'App\\Controller\\ControlController::index' => ['privates', '.service_locator.fNKjjcX', 'get_ServiceLocator_FNKjjcXService', true],
            'App\\Controller\\ControlController::new' => ['privates', '.service_locator.fNKjjcX', 'get_ServiceLocator_FNKjjcXService', true],
            'App\\Controller\\ControlController::show' => ['privates', '.service_locator.57wEZHh', 'get_ServiceLocator_57wEZHhService', true],
            'App\\Controller\\EmpleadosController::delete' => ['privates', '.service_locator.Lidw8U4', 'get_ServiceLocator_Lidw8U4Service', true],
            'App\\Controller\\EmpleadosController::edit' => ['privates', '.service_locator.Lidw8U4', 'get_ServiceLocator_Lidw8U4Service', true],
            'App\\Controller\\EmpleadosController::index' => ['privates', '.service_locator.AjeKrod', 'get_ServiceLocator_AjeKrodService', true],
            'App\\Controller\\EmpleadosController::new' => ['privates', '.service_locator.AjeKrod', 'get_ServiceLocator_AjeKrodService', true],
            'App\\Controller\\EmpleadosController::show' => ['privates', '.service_locator.hXbNXzP', 'get_ServiceLocator_HXbNXzPService', true],
            'App\\Controller\\IncidenciasController::delete' => ['privates', '.service_locator.ny2_v8K', 'get_ServiceLocator_Ny2V8KService', true],
            'App\\Controller\\IncidenciasController::edit' => ['privates', '.service_locator.ny2_v8K', 'get_ServiceLocator_Ny2V8KService', true],
            'App\\Controller\\IncidenciasController::index' => ['privates', '.service_locator.Aze_.AS', 'get_ServiceLocator_Aze_ASService', true],
            'App\\Controller\\IncidenciasController::new' => ['privates', '.service_locator.Aze_.AS', 'get_ServiceLocator_Aze_ASService', true],
            'App\\Controller\\IncidenciasController::show' => ['privates', '.service_locator.Zcqh8_X', 'get_ServiceLocator_Zcqh8XService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
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
            'App\\Controller\\ControlController:delete' => ['privates', '.service_locator.4d_cSZq', 'get_ServiceLocator_4dCSZqService', true],
            'App\\Controller\\ControlController:edit' => ['privates', '.service_locator.4d_cSZq', 'get_ServiceLocator_4dCSZqService', true],
            'App\\Controller\\ControlController:index' => ['privates', '.service_locator.fNKjjcX', 'get_ServiceLocator_FNKjjcXService', true],
            'App\\Controller\\ControlController:new' => ['privates', '.service_locator.fNKjjcX', 'get_ServiceLocator_FNKjjcXService', true],
            'App\\Controller\\ControlController:show' => ['privates', '.service_locator.57wEZHh', 'get_ServiceLocator_57wEZHhService', true],
            'App\\Controller\\EmpleadosController:delete' => ['privates', '.service_locator.Lidw8U4', 'get_ServiceLocator_Lidw8U4Service', true],
            'App\\Controller\\EmpleadosController:edit' => ['privates', '.service_locator.Lidw8U4', 'get_ServiceLocator_Lidw8U4Service', true],
            'App\\Controller\\EmpleadosController:index' => ['privates', '.service_locator.AjeKrod', 'get_ServiceLocator_AjeKrodService', true],
            'App\\Controller\\EmpleadosController:new' => ['privates', '.service_locator.AjeKrod', 'get_ServiceLocator_AjeKrodService', true],
            'App\\Controller\\EmpleadosController:show' => ['privates', '.service_locator.hXbNXzP', 'get_ServiceLocator_HXbNXzPService', true],
            'App\\Controller\\IncidenciasController:delete' => ['privates', '.service_locator.ny2_v8K', 'get_ServiceLocator_Ny2V8KService', true],
            'App\\Controller\\IncidenciasController:edit' => ['privates', '.service_locator.ny2_v8K', 'get_ServiceLocator_Ny2V8KService', true],
            'App\\Controller\\IncidenciasController:index' => ['privates', '.service_locator.Aze_.AS', 'get_ServiceLocator_Aze_ASService', true],
            'App\\Controller\\IncidenciasController:new' => ['privates', '.service_locator.Aze_.AS', 'get_ServiceLocator_Aze_ASService', true],
            'App\\Controller\\IncidenciasController:show' => ['privates', '.service_locator.Zcqh8_X', 'get_ServiceLocator_Zcqh8XService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\CochesController::delete' => '?',
            'App\\Controller\\CochesController::edit' => '?',
            'App\\Controller\\CochesController::index' => '?',
            'App\\Controller\\CochesController::new' => '?',
            'App\\Controller\\CochesController::show' => '?',
            'App\\Controller\\ControlController::delete' => '?',
            'App\\Controller\\ControlController::edit' => '?',
            'App\\Controller\\ControlController::index' => '?',
            'App\\Controller\\ControlController::new' => '?',
            'App\\Controller\\ControlController::show' => '?',
            'App\\Controller\\EmpleadosController::delete' => '?',
            'App\\Controller\\EmpleadosController::edit' => '?',
            'App\\Controller\\EmpleadosController::index' => '?',
            'App\\Controller\\EmpleadosController::new' => '?',
            'App\\Controller\\EmpleadosController::show' => '?',
            'App\\Controller\\IncidenciasController::delete' => '?',
            'App\\Controller\\IncidenciasController::edit' => '?',
            'App\\Controller\\IncidenciasController::index' => '?',
            'App\\Controller\\IncidenciasController::new' => '?',
            'App\\Controller\\IncidenciasController::show' => '?',
            'App\\Controller\\SecurityController::login' => '?',
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
            'App\\Controller\\ControlController:delete' => '?',
            'App\\Controller\\ControlController:edit' => '?',
            'App\\Controller\\ControlController:index' => '?',
            'App\\Controller\\ControlController:new' => '?',
            'App\\Controller\\ControlController:show' => '?',
            'App\\Controller\\EmpleadosController:delete' => '?',
            'App\\Controller\\EmpleadosController:edit' => '?',
            'App\\Controller\\EmpleadosController:index' => '?',
            'App\\Controller\\EmpleadosController:new' => '?',
            'App\\Controller\\EmpleadosController:show' => '?',
            'App\\Controller\\IncidenciasController:delete' => '?',
            'App\\Controller\\IncidenciasController:edit' => '?',
            'App\\Controller\\IncidenciasController:index' => '?',
            'App\\Controller\\IncidenciasController:new' => '?',
            'App\\Controller\\IncidenciasController:show' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
