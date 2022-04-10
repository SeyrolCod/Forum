<?php

namespace Admin\Factory;

use Admin\Controller\IndexController;
use Doctrine\DBAL\Schema\Index;
use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Laminas\ServiceManager\Exception\ServiceNotCreatedException;
use Laminas\ServiceManager\Exception\ServiceNotFoundException;
use Laminas\ServiceManager\Factory\FactoryInterface;

class IndexControllerFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        $entityManager = $container->get(\Doctrine\ORM\EntityManager::class);
        return new IndexController($entityManager);
    }
}