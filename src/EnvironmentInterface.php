<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\Environment;

interface EnvironmentInterface
{
    public function get(): string;

    public function is(string ...$environments): bool;

    public function isDevelopment(): bool;

    public function isLocal(): bool;

    public function isProduction(): bool;

    public function isStaging(): bool;
}
