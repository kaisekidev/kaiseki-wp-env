<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\Environment;

abstract class AbstractEnvironment
{
    private const DEVELOPMENT = 'development';
    private const LOCAL = 'local';
    private const PRODUCTION = 'production';
    private const STAGING = 'staging';

    abstract protected function get(): string;

    public function isDevelopment(): bool
    {
        return $this->get() === self::DEVELOPMENT;
    }

    public function isLocal(): bool
    {
        return $this->get() === self::LOCAL;
    }

    public function isProduction(): bool
    {
        return $this->get() === self::PRODUCTION;
    }

    public function isStaging(): bool
    {
        return $this->get() === self::STAGING;
    }
}
