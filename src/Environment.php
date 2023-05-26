<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\Environment;

use function defined;

class Environment extends AbstractEnvironment implements EnvironmentInterface
{
    public function get(): string
    {
        if (defined('WP_ENV')) {
            return WP_ENV;
        }
        return wp_get_environment_type();
    }
}
