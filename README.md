# e-Certify: E-Certificate Management and Verification System

DICT Quezon 4A | Group 2 IT Interns

## Overview

e-Certify is a Laravel + Livewire web application for managing training events, importing participant records, and supporting certificate workflows with public verification support.

## Core Features

- Admin authentication and account settings
- Training event management
- Participant import via CSV
- Email workflows for verification and password reset
- Public-facing pages and verification-related flows

## Tech Stack

- Backend: Laravel 12, PHP 8.2+
- Frontend: Livewire 4, Blade, Tailwind, Vite
- Database: MySQL 8+
- Testing: Pest + PHPUnit

## Required Apps For Collaborators

Install these on your machine before setup:

1. Git
2. Docker Desktop (recommended workflow)
3. VS Code

Optional (only if not using Docker for local runtime):

1. PHP 8.2+
2. Composer 2.8+
3. Node.js 22+
4. MySQL 8+

## Quick Start (Recommended: Docker)

This repository includes a Docker environment so all collaborators use aligned versions:

- PHP `8.2` (`php:8.2-cli-bookworm`)
- MySQL `8.4` (`mysql:8.4`)
- Composer `2.8` (`composer:2.8`)
- Node `22` (`node:22-alpine`)

### 1. Clone and enter project

```bash
git clone https://github.com/CodinghamPalace/e-certify.git
cd e-certify
```

### 2. Start core containers

```bash
docker compose up -d --build mysql app
```

### 3. Install backend dependencies

```bash
docker compose run --rm composer install
```

### 4. Configure environment

```bash
cp .env.example .env
```

If `.env.example` is missing, create `.env` and set at least:

```env
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=e_certify
DB_USERNAME=e_certify_user
DB_PASSWORD=secret
```

### 5. Generate app key and migrate

```bash
docker compose exec app php artisan key:generate
docker compose exec app php artisan migrate
```

### 6. Run application server

```bash
docker compose exec app php artisan serve --host=0.0.0.0 --port=8000
```

Open `http://localhost:8000`.

### 7. Run Vite dev server (optional)

```bash
docker compose up node
```

Open `http://localhost:5173`.

## Local Setup Without Docker (Optional)

Use this only if your machine already has PHP, Composer, Node, and MySQL installed.

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run build
php artisan serve
```

## Team Workflow

### Branching

1. Pull latest `main`
2. Create a feature branch (`feat/...`, `fix/...`, `chore/...`)
3. Open a PR when ready

### Before pushing

```bash
php artisan test --compact
```

If frontend files changed:

```bash
npm run build
```

## Laravel Cloud Deployment Notes

### Initial deploy checklist

1. Ensure app root is repository root
2. Set required environment variables in Laravel Cloud
3. Run migrations in deployment/commands panel

### Mail setup checklist

Set these in Laravel Cloud custom environment variables:

```env
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-smtp-username
MAIL_PASSWORD=your-smtp-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=no-reply@yourdomain.com
MAIL_FROM_NAME="e-certify"
```

Then run:

```bash
php artisan optimize:clear
php artisan config:clear
```

## Useful Commands

```bash
# Stop all containers
docker compose down

# Stop and remove DB volume
docker compose down -v

# Run tests
docker compose exec app php artisan test

# Update composer dependencies
docker compose run --rm composer update

# Clear Laravel caches
php artisan optimize:clear
```

## Troubleshooting

### Vite manifest missing (`public/build/manifest.json`)

```bash
npm install
npm run build
```

### Port 8000 already in use

Stop old processes and restart `php artisan serve`.

### Mail not sending in Cloud

1. Verify Cloud env variables are not placeholders
2. Clear config cache in Cloud
3. Check Cloud logs for SMTP authentication errors

## License

This project is open-sourced software licensed under the MIT license.
