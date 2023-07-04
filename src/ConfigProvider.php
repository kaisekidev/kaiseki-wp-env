<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\Environment;

final class ConfigProvider
{
    /**
     * @return array<mixed>
     */
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                'aliases' => [
                    EnvironmentInterface::class => Environment::class,
                    StaticEnvironmentInterface::class => StaticEnvironment::class,
                ],
            ],
        ];
    }
}
