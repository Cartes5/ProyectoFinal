<?php

namespace ContainerGs9ddjF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getControlControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ControlController' shared autowired service.
     *
     * @return \App\Controller\ControlController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ControlController.php';

        $container->services['App\\Controller\\ControlController'] = $instance = new \App\Controller\ControlController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\ControlController', $container));

        return $instance;
    }
}
