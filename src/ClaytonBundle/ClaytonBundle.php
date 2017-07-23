<?php

namespace ClaytonBundle;

use ClaytonBundle\DependencyInjection\ClaytonExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ClaytonBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new ClaytonExtension();
    }
}
