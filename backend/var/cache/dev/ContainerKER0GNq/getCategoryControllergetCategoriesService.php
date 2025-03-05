<?php

namespace ContainerKER0GNq;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryControllergetCategoriesService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MTCWnA5.App\Controller\CategoryController::getCategories()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MTCWnA5.App\\Controller\\CategoryController::getCategories()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
        ], [
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
        ]))->withContext('App\\Controller\\CategoryController::getCategories()', $container);
    }
}
