<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\Environment;

abstract class AbstractEnvironment
{
    public const DEVELOPMENT = 'development';
    public const LOCAL = 'local';
    public const PRODUCTION = 'production';
    public const STAGING = 'staging';
}
