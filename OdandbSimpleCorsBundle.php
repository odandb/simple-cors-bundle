<?php

namespace Odandb\SimpleCorsBundle;

use Odandb\SimpleCorsBundle\DependencyInjection\OdandbSimpleCorsExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class OdandbSimpleCorsBundle extends Bundle
{
    public function build(ContainerBuilder $container): void
    {
        parent::build($container);
    }

    public function getContainerExtension()
    {
        return new OdandbSimpleCorsExtension();
    }
}