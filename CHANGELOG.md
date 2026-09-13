# Changelog

## [0.1.1] - 2026-09-13

### Fixed

- Checkboxes (the "Remember me" of the login page among them) looked unchecked: the rapyd component rules colour them with `--bs-primary`, which Tabler does not define. The theme now sets Bootstrap's `--bs-primary`, `--bs-primary-rgb`, `--bs-link-color` and `--bs-link-hover-color` to Tabler's blue; the runtime palette still overrides them.

## [0.1.0] - 2026-09-12

First release.
