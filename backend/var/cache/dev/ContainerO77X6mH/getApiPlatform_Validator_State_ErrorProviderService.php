<?php

namespace ContainerO77X6mH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Validator_State_ErrorProviderService extends App_KernelDevContainer
{
    /*
     * Gets the private 'api_platform.validator.state.error_provider' shared service.
     *
     * @return \ApiPlatform\Symfony\Validator\State\ErrorProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['api_platform.validator.state.error_provider'] = new \ApiPlatform\Symfony\Validator\State\ErrorProvider();
    }
}
