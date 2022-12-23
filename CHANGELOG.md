# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased](https://github.com/claudiodekker/laravel-auth-bladebones/compare/v0.1.1...HEAD)

### Added

- PHP 8.2 Support ([#5](https://github.com/claudiodekker/laravel-auth-bladebones/pull/5))
- The Passkey-based registration flow can now be cancelled, directly releasing the claimed user ([#7](https://github.com/claudiodekker/laravel-auth-bladebones/pull/7))
- Add additional docblock-level `@see`-references to indicate what "response" methods are called internally. ([#11](https://github.com/claudiodekker/laravel-auth-bladebones/pull/11))

### Changed

- New Account Security Strength Indicator ([#9](https://github.com/claudiodekker/laravel-auth-bladebones/pull/9))
- The recovery challenge will now be skipped when no codes have been configured ([#10](https://github.com/claudiodekker/laravel-auth-bladebones/pull/10))

### Fixed

- Fixed a minor issue that caused recovery codes to not fit in the recovery field when including a dash (-) ([#8](https://github.com/claudiodekker/laravel-auth-bladebones/issues/8))
- Fix OTP confirmation code return-type bug ([#11](https://github.com/claudiodekker/laravel-auth-bladebones/pull/11))

## [v0.1.2](https://github.com/claudiodekker/laravel-auth-bladebones/compare/v0.1.2...v0.1.1) - 2022-11-30

### Fixed

- Add Laravel Pint linting to scaffolding-created files ([#1](https://github.com/claudiodekker/laravel-auth-bladebones/pull/1))
- Fix imports on generated files ([#2](https://github.com/claudiodekker/laravel-auth-bladebones/pull/2))

## [v0.1.1](https://github.com/claudiodekker/laravel-auth-bladebones/compare/v0.1.1...v0.1.0) - 2022-11-30

### Fixed

- Widen the version constraint to allow `claudiodekker/laravel-auth` >=v0.1 <1.0.0

## [v0.1.0](https://github.com/claudiodekker/laravel-auth-bladebones/releases/tag/v0.1.0) - 2022-11-30

### Added

- Initial release
