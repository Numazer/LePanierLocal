<?php

namespace ContainerY214Yxb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Yw1MA4vService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Yw1MA4v' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Yw1MA4v'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Controller\\CategoryController::getCategories' => ['privates', '.service_locator.MTCWnA5.App\\Controller\\CategoryController::getCategories()', 'getCategoryControllergetCategoriesService', true],
            'App\\Controller\\DiscountController::getDiscounts' => ['privates', '.service_locator.miUSQzh.App\\Controller\\DiscountController::getDiscounts()', 'getDiscountControllergetDiscountsService', true],
            'App\\Controller\\ProductController::addProduct' => ['privates', '.service_locator.egipcEH.App\\Controller\\ProductController::addProduct()', 'getProductControlleraddProductService', true],
            'App\\Controller\\SizeController::getSizes' => ['privates', '.service_locator.0OVTmbO.App\\Controller\\SizeController::getSizes()', 'getSizeControllergetSizesService', true],
            'App\\Controller\\SubCategoryController::getSubCategories' => ['privates', '.service_locator..IVzQrD.App\\Controller\\SubCategoryController::getSubCategories()', 'getSubCategoryControllergetSubCategoriesService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Controller\\CategoryController:getCategories' => ['privates', '.service_locator.MTCWnA5.App\\Controller\\CategoryController::getCategories()', 'getCategoryControllergetCategoriesService', true],
            'App\\Controller\\DiscountController:getDiscounts' => ['privates', '.service_locator.miUSQzh.App\\Controller\\DiscountController::getDiscounts()', 'getDiscountControllergetDiscountsService', true],
            'App\\Controller\\ProductController:addProduct' => ['privates', '.service_locator.egipcEH.App\\Controller\\ProductController::addProduct()', 'getProductControlleraddProductService', true],
            'App\\Controller\\SizeController:getSizes' => ['privates', '.service_locator.0OVTmbO.App\\Controller\\SizeController::getSizes()', 'getSizeControllergetSizesService', true],
            'App\\Controller\\SubCategoryController:getSubCategories' => ['privates', '.service_locator..IVzQrD.App\\Controller\\SubCategoryController::getSubCategories()', 'getSubCategoryControllergetSubCategoriesService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\CategoryController::getCategories' => '?',
            'App\\Controller\\DiscountController::getDiscounts' => '?',
            'App\\Controller\\ProductController::addProduct' => '?',
            'App\\Controller\\SizeController::getSizes' => '?',
            'App\\Controller\\SubCategoryController::getSubCategories' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\CategoryController:getCategories' => '?',
            'App\\Controller\\DiscountController:getDiscounts' => '?',
            'App\\Controller\\ProductController:addProduct' => '?',
            'App\\Controller\\SizeController:getSizes' => '?',
            'App\\Controller\\SubCategoryController:getSubCategories' => '?',
        ]);
    }
}
