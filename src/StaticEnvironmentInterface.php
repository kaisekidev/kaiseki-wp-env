<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\Environment;

interface StaticEnvironmentInterface
{
    public static function get(): string;

    public static function is(string ...$environments): bool;

    public static function isDevelopment(): bool;

    public static function isLocal(): bool;

    public static function isProduction(): bool;

    public static function isStaging(): bool;
}
