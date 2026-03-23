# PHVN Guides Index

All project instructions live in this folder.

## Available Guides

- `01_SETUP_AND_ENVIRONMENT.md` - environment setup, local workflow, and development rules
- `02_STRUCTURE_AND_RUNTIME.md` - codebase structure, bootstrap flow, and where each part belongs
- `03_EXTENSION_AND_EXAMPLES.md` - examples for adding pages, handlers, and shared helpers
- `CUSTOM_SETTING_PRIORITY.md` - default project principles plus a custom section for extra rules

## Recommended Reading Order

1. `00_START_HERE.md`
2. `01_SETUP_AND_ENVIRONMENT.md`
3. `02_STRUCTURE_AND_RUNTIME.md`
4. `03_EXTENSION_AND_EXAMPLES.md`
5. `CUSTOM_SETTING_PRIORITY.md`

## Development Guide

Use this folder as the single source of truth for:

- project setup
- file placement rules
- runtime flow
- extension examples

## Example Use Case

If you want to add a new `about` page with a form:

1. Open `02_STRUCTURE_AND_RUNTIME.md` to see where `pages/`, `components/`, and `submissions/` are used
2. Open `03_EXTENSION_AND_EXAMPLES.md` to copy the page and handler pattern
3. Open `01_SETUP_AND_ENVIRONMENT.md` if the feature needs database or mail configuration
4. Open `CUSTOM_SETTING_PRIORITY.md` if the feature must follow additional project-specific rules
