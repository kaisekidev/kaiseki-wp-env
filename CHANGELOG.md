# Changelog

All notable changes to this project will be documented in this file, in reverse chronological order by release.

## 1.0.0 - 2026-05-31

First tagged release.

### Added

- `EnvironmentInterface` / `Environment` and `StaticEnvironmentInterface` / `StaticEnvironment` for
  resolving the current environment (`WP_ENV` constant, falling back to `wp_get_environment_type()`)
  with typed checks: `get()`, `is()`, `isDevelopment()`, `isLocal()`, `isProduction()`, `isStaging()`.
- `ConfigProvider` aliasing the interfaces to their implementations for PSR-11 containers.

### Changed

- PHP requirement is `^8.2` (PHP 8.4 is the primary target).
- Adopted the org baseline: `kaiseki/php-coding-standard: ^1.0` with the shared PHPStan config
  (`level: max`), PHPStan 2, composer-require-checker 4; CI runs via the reusable workflow in
  `kaisekidev/.github`. Static-analysis only — no test suite yet (`run-tests: false`).
- `Environment::get()` / `StaticEnvironment::get()` now guard the `WP_ENV` constant with `is_string()`
  (PHPStan 2 at `level: max`). A non-string `WP_ENV` now falls back to `wp_get_environment_type()`
  instead of returning a value that would violate the `string` return type.
