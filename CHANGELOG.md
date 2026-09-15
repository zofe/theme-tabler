# Changelog

## [0.1.5] - 2026-09-15

### Added

- Theme picker in the admin and frontend navbars (rapyd-admin 9.13 `RAPYD_THEME_SWITCH`).

## [0.1.4] - 2026-09-15

### Changed

- Frontend navbar: the light / dark toggle is shown to guests too; `RAPYD_AUTH_LINKS=false` hides the Login / Register links (rapyd-admin 9.12.1).

## [0.1.3] - 2026-09-13

### Changed

- Theme toggle follows the look actually on screen (system preference included), so the first click always flips it.

## [0.1.2] - 2026-09-13

### Fixed

- TomSelect dropdowns (every `x-rpd::select-list`) were transparent: the theme now maps Bootstrap's surface tokens (`--bs-body-bg`, `--bs-body-color`, `--bs-border-color`, secondary and tertiary backgrounds) onto Tabler's, in light and dark mode.

## [0.1.1] - 2026-09-13

### Fixed

- Checkboxes (the "Remember me" of the login page among them) looked unchecked: the rapyd component rules colour them with `--bs-primary`, which Tabler does not define. The theme now sets Bootstrap's `--bs-primary`, `--bs-primary-rgb`, `--bs-link-color` and `--bs-link-hover-color` to Tabler's blue; the runtime palette still overrides them.

## [0.1.0] - 2026-09-12

First release.
