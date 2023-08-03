<?php

declare(strict_types=1);

namespace LukeKortunov\Micra\Contracts;

use League\Container\DefinitionContainerInterface;

interface ExtensionInterface
{
    public function __invoke(DefinitionContainerInterface $container): void;
}