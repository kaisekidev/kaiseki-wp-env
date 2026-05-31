# kaiseki/wp-env

WordPress environment helper — resolve and check the current environment type.

Reads the environment from the `WP_ENV` constant when it's defined (and a string), otherwise falls
back to WordPress's `wp_get_environment_type()`. Provides typed checks (`isProduction()`,
`isStaging()`, …) in both an injectable (`Environment`) and a static (`StaticEnvironment`) flavor.

## Installation

```bash
composer require kaiseki/wp-env
```

Requires PHP 8.2 or newer.

## Usage

```php
use Kaiseki\WordPress\Environment\Environment;

$env = new Environment();

$env->get();                        // e.g. 'production'
$env->isProduction();               // true
$env->is('staging', 'production');  // true if the env is either
```

The recognized values are `development`, `local`, `production`, and `staging` (the
`AbstractEnvironment` constants). When you can't inject a dependency, use the static variant:

```php
use Kaiseki\WordPress\Environment\StaticEnvironment;

if (StaticEnvironment::isLocal()) {
    // …
}
```

### Container wiring

`ConfigProvider` registers the interface → implementation aliases for a PSR-11 container
(laminas-style config aggregator): `EnvironmentInterface` → `Environment` and
`StaticEnvironmentInterface` → `StaticEnvironment`. Type-hint `EnvironmentInterface` in your
services and let the container resolve it.

## Development

```bash
composer install
composer check   # check-deps, cs-check, phpstan
```

## License

MIT — see [LICENSE](LICENSE).
