# crafty-crochet-corner

## Setup

```bash
yarn install
composer install
```

## Build

CSS is built from `assets/css/input.css` into `assets/css/style.css` with the Tailwind CLI:

```bash
yarn build   # one-off build, minified
yarn watch   # rebuilds on change
```

Run this (or `yarn watch` while working on styles) whenever `assets/css/input.css` or any `.php`
template changes — `assets/css/style.css` is generated and must stay in sync.

## Run

```bash
docker compose up
```

Serves the site at <http://localhost:8080>.

## Lint

```bash
composer lint      # phpcs
composer lint:fix  # phpcbf, autofixes what it can
```

PS: commits are just `master`, no branches/PRs — full gitflow felt like overkill for a project this small.
