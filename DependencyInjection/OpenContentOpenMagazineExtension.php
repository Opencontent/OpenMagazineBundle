<?php

namespace OpenContent\OpenMagazineBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

class OpenContentOpenMagazineExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new Loader\YamlFileLoader($container, new FileLocator( __DIR__.'/../Resources/config' ));
        $loader->load( 'storage_engines.yml' );        
        $loader->load( 'fieldtypes.yml' );
    }
}
