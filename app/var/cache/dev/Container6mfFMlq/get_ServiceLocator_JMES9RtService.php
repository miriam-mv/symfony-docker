<?php

namespace Container6mfFMlq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JMES9RtService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jMES9Rt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jMES9Rt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\PeticionController::delete' => ['privates', '.service_locator.Oh99XTq', 'get_ServiceLocator_Oh99XTqService', true],
            'App\\Controller\\PeticionController::edit' => ['privates', '.service_locator.Oh99XTq', 'get_ServiceLocator_Oh99XTqService', true],
            'App\\Controller\\PeticionController::index' => ['privates', '.service_locator.tLi_MEM', 'get_ServiceLocator_TLiMEMService', true],
            'App\\Controller\\PeticionController::show' => ['privates', '.service_locator.Oh99XTq', 'get_ServiceLocator_Oh99XTqService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\PeticionController:delete' => ['privates', '.service_locator.Oh99XTq', 'get_ServiceLocator_Oh99XTqService', true],
            'App\\Controller\\PeticionController:edit' => ['privates', '.service_locator.Oh99XTq', 'get_ServiceLocator_Oh99XTqService', true],
            'App\\Controller\\PeticionController:index' => ['privates', '.service_locator.tLi_MEM', 'get_ServiceLocator_TLiMEMService', true],
            'App\\Controller\\PeticionController:show' => ['privates', '.service_locator.Oh99XTq', 'get_ServiceLocator_Oh99XTqService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\PeticionController::delete' => '?',
            'App\\Controller\\PeticionController::edit' => '?',
            'App\\Controller\\PeticionController::index' => '?',
            'App\\Controller\\PeticionController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\PeticionController:delete' => '?',
            'App\\Controller\\PeticionController:edit' => '?',
            'App\\Controller\\PeticionController:index' => '?',
            'App\\Controller\\PeticionController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}