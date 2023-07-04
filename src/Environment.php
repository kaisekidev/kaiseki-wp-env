<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\Environment;

use function defined;
use function in_array;

class Environment extends AbstractEnvironment implements EnvironmentInterface
{
    public function get(): string
    {
        if (defined('WP_ENV')) {
            return WP_ENV;
        }
        return wp_get_environment_type();
    }

    public function is(string ...$environments): bool
    {
        return in_array($this->get(), $environments, true);
    }

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
