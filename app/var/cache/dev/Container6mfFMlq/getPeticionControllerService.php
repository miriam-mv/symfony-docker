<?php

namespace Container6mfFMlq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPeticionControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PeticionController' shared autowired service.
     *
     * @return \App\Controller\PeticionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PeticionController.php';

        $container->services['App\\Controller\\PeticionController'] = $instance = new \App\Controller\PeticionController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\PeticionController', $container));

        return $instance;
    }
}