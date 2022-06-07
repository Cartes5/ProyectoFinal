<?php

namespace ContainerM2OQ4qS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCochesTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\CochesType' shared autowired service.
     *
     * @return \App\Form\CochesType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/CochesType.php';

        return $container->privates['App\\Form\\CochesType'] = new \App\Form\CochesType();
    }
}
