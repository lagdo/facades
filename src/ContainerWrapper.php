<?php

namespace Lagdo\Facades;

use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;

final class ContainerWrapper
{
    /**
     * @var ContainerInterface
     */
    private static ContainerInterface $container;

    /**
     * @param ContainerInterface $container
     *
     * @return void
     */
    public static function setContainer(ContainerInterface $container): void
    {
        self::$container = $container;
    }

    /**
     * Get a service using the container.
     *
     * @param string $serviceId
     *
     * @return mixed
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public static function getFacadeService(string $serviceId): mixed
    {
        return self::$container->get($serviceId);
    }
}
