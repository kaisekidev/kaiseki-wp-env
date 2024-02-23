<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\Environment;

use function defined;
use function in_array;
use function wp_get_environment_type;

class StaticEnvironment extends AbstractEnvironment implements StaticEnvironmentInterface
{
    public static function get(): string
    {
        if (defined('WP_ENV')) {
            return WP_ENV;
        }

        return wp_get_environment_type();
    }

    public static function is(string ...$environments): bool
    {
        return in_array(self::get(), $environments, true);
    }

    public static function isDevelopment(): bool
    {
        return self::get() === self::DEVELOPMENT;
    }

    public static function isLocal(): bool
    {
        return self::get() === self::LOCAL;
    }

    public static function isProduction(): bool
    {
        return self::get() === self::PRODUCTION;
    }

    public static function isStaging(): bool
    {
        return self::get() === self::STAGING;
    }
}
