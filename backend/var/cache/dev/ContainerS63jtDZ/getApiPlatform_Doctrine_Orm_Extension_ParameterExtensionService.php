<?php

namespace ContainerS63jtDZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Doctrine_Orm_Extension_ParameterExtensionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.doctrine.orm.extension.parameter_extension' shared service.
     *
     * @return \ApiPlatform\Doctrine\Orm\Extension\ParameterExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'doctrine-orm'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'QueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'doctrine-orm'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'QueryItemExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'doctrine-common'.\DIRECTORY_SEPARATOR.'ParameterValueExtractorTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'doctrine-orm'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'ParameterExtension.php';

        return $container->privates['api_platform.doctrine.orm.extension.parameter_extension'] = new \ApiPlatform\Doctrine\Orm\Extension\ParameterExtension(($container->privates['api_platform.filter_locator'] ??= new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [], [])));
    }
}
