<?php

namespace Picodi\PlaceholderReplacer;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class PlaceholderReplacerBundle extends Bundle
{

    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }
}