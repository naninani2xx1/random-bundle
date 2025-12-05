<?php

namespace NguyenHoaiChuong\RandomBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('nhc_random');

        $treeBuilder->getRootNode()
            ->addDefaultsIfNotSet()
            ->children()
            ->integerNode('default_string_length')->defaultValue(8)->end()
            ->end();

        return $treeBuilder;
    }
}