# Rapyd Admin — Tabler theme

[Tabler](https://tabler.io) (MIT, Bootstrap 5) as the admin, public and auth layouts of
[Rapyd Admin](https://github.com/zofe/rapyd-admin). It follows the layout contract in `docs/THEMES.md` of the package:
same modules, same `x-rpd::` components, a different shell.

## Install

```bash
composer require zofe/theme-tabler
php artisan vendor:publish --tag=laravel-assets --force   # public/vendor/themes/tabler
```

```dotenv
RAPYD_THEME=tabler
```

`php artisan rpd:theme:check` confirms the theme fulfils the contract. Remove the variable to go back to the bundled look.

## What it changes

- `resources/views/{app,admin,frontend,auth}.blade.php` and `includes/`: Tabler's vertical sidebar (`navbar-vertical`),
  top navbar with search, user menu and light/dark toggle, `page-wrapper` with breadcrumbs and the content.
- `resources/views/rpd/components/`: `nav-dropdown`, `nav-link`, `nav-item` rendered as Tabler sidebar items, so the
  menus of the modules need no change.
- `resources/sass/theme.scss`: Tabler + Bootstrap variables + `rapyd-base` (the rapyd components), with the runtime
  palette mapped onto Tabler's `--tblr-*` variables: `RAPYD_PRIMARY` & co. keep working.
- `resources/js/theme.js`: rapyd's `rapyd-core` (Bootstrap, TomSelect, modals, theme switcher, livewire-sortable).
  Tabler's own JS is not needed.
- Dark mode: Tabler's native `data-bs-theme="dark"`, toggled by the rapyd theme switcher.

## Build

```bash
composer install        # brings zofe/rapyd-admin, whose resources the build imports
npm i
npm run dev             # vite build --watch → public/
npm run build
```

Status: first version, a proof of the theme contract. Font Awesome (used by the rapyd components) and Inter are
loaded from CDNs; Tabler icons are not included.
