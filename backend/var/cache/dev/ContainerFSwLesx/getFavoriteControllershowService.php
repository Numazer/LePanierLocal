<?php

namespace ContainerFSwLesx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFavoriteControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KOxrz0D.App\Controller\FavoriteController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KOxrz0D.App\\Controller\\FavoriteController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'favoriteRepository' => ['privates', 'App\\Repository\\FavoriteRepository', 'getFavoriteRepositoryService', true],
            'productRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
        ], [
            'favoriteRepository' => 'App\\Repository\\FavoriteRepository',
            'productRepository' => 'App\\Repository\\ProductRepository',
        ]))->withContext('App\\Controller\\FavoriteController::show()', $container);
    }
}
