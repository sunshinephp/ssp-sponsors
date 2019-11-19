<?php

namespace SspSponsors\Factory;

use Interop\Container\ContainerInterface;
use SspSponsors\Controller\SponsorsController;

class SponsorsControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new SponsorsController($container->get('SponsorsTable'));
    }
}
