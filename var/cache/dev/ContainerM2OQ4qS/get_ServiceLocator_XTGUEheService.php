<?php

namespace ContainerM2OQ4qS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XTGUEheService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XTGUEhe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XTGUEhe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cochesRepository' => ['privates', 'App\\Repository\\CochesRepository', 'getCochesRepositoryService', true],
        ], [
            'cochesRepository' => 'App\\Repository\\CochesRepository',
        ]);
    }
}
