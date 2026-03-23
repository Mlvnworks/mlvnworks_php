# Structure And Runtime Guide

## Purpose

This guide explains the current project structure and how a request moves through the app.

## Architecture Overview

PHVN follows a plain PHP structure with three main runtime layers:

1. `index.php`
2. `submission.php`
3. `navigator/navigator.php`

## Important Structure

| Path | What It Does |
| --- | --- |
| `index.php` | Main entry point. Loads config, starts the session, resolves `?c=<page>`, and starts the runtime. |
| `config.php` | Loads `.env`, defines constants, and opens the MySQL connection when fully configured. |
| `submission.php` | Loads shared classes and auto-loads request handlers from `submissions/`. |
| `navigator/navigator.php` | Builds the page whitelist, loads shared layout parts, and renders the selected page or 404 view. |
| `classes/` | Reusable PHP logic shared across the app. |
| `pages/` | Route-like page templates loaded with `?c=<page>`. |
| `submissions/` | Request handlers for POST forms, AJAX actions, and small action endpoints. |
| `components/` | Shared UI pieces and fallback views. |
| `styling/` | Global, page, and component CSS. |
| `assets/` | Static assets such as icons and images. |

## Runtime Flow

1. `index.php` includes `config.php`
2. `config.php` loads environment values and sets app constants
3. `index.php` starts the session and resolves the requested page
4. `submission.php` initializes shared objects and loads handlers
5. `navigator/navigator.php` checks whether the page exists
6. The selected page is rendered from `pages/`
7. Shared components such as navbar, footer, and alerts are rendered around it

## Development Guide

### Where To Put New Code

- New page: `pages/`
- New page CSS: `styling/page/`
- New request action: `submissions/`
- New shared helper: `classes/`
- New reusable layout block: `components/`

### What Not To Mix

- Do not put request-handling logic inside page templates
- Do not put database boot logic inside page files
- Do not put reusable helper logic inside components

## Example Use Case

### Example: Add A New `about` Page

1. Create `pages/about.php`
2. Create `styling/page/about.css` if needed
3. Open `/?c=about`

The navigator will automatically allow the page because it builds its whitelist from `pages/*.php`.

### Example: Add A Shared Hero Banner Component

1. Create `components/hero-banner.php`
2. Include it from a page or from `navigator/navigator.php`
3. Put any shared styles in `styling/component/`
