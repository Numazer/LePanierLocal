<?php

namespace ContainerFSwLesx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vCPEyuw.App\Controller\ProductController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vCPEyuw.App\\Controller\\ProductController::show()'] = ($container->privates['.service_locator.vCPEyuw'] ?? $container->load('get_ServiceLocator_VCPEyuwService'))->withContext('App\\Controller\\ProductController::show()', $container);
    }
}
