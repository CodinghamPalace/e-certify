# Laravel + Livewire Starter Kit

## Docker Setup For Team Development

This project now includes a Docker setup so everyone on the team runs the same versions of key services:

- PHP: `8.2` (from `php:8.2-cli-bookworm`)
- MySQL: `8.4` (from `mysql:8.4`)
- Composer: `2.8` (from `composer:2.8`)
- Node: `22` (from `node:22-alpine`)

### 1. Build and start containers

```bash
docker compose up -d --build mysql app
```

### 2. Install PHP dependencies with pinned Composer

```bash
docker compose run --rm composer install
```

### 3. Prepare Laravel app

```bash
docker compose exec app cp .env.example .env
docker compose exec app php artisan key:generate
docker compose exec app php artisan migrate
```

If `.env.example` does not exist in your copy, create `.env` manually and ensure these values are set:

```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=e_certify
DB_USERNAME=e_certify_user
DB_PASSWORD=secret
```

### 4. Run Laravel app

```bash
docker compose exec app php artisan serve --host=0.0.0.0 --port=8000
```

Open: `http://localhost:8000`

### 5. Run Vite dev server (optional)

```bash
docker compose up node
```

Open: `http://localhost:5173`

### Useful commands

```bash
# Stop all services
docker compose down

# Stop and remove DB data volume
docker compose down -v

# Run tests
docker compose exec app php artisan test

# Run composer command
docker compose run --rm composer update
```

## Introduction

Our Laravel + [Livewire](https://livewire.laravel.com) starter kit provides a robust, modern starting point for building Laravel applications with a Livewire frontend.

Livewire is a powerful way of building dynamic, reactive, frontend UIs using just PHP. It's a great fit for teams that primarily use Blade templates and are looking for a simpler alternative to JavaScript-driven SPA frameworks like React and Vue.

This Livewire starter kit utilizes Livewire 4, TypeScript, Tailwind, and the [Flux UI](https://fluxui.dev) component library.

If you are looking for the alternate configurations of this starter kit, they can be found in the following branches:

- [components](https://github.com/laravel/livewire-starter-kit/tree/components) - if Volt is not selected
- [workos](https://github.com/laravel/livewire-starter-kit/tree/workos) - if WorkOS is selected for authentication

## Official Documentation

Documentation for all Laravel starter kits can be found on the [Laravel website](https://laravel.com/docs/starter-kits).

## Contributing

Thank you for considering contributing to our starter kit! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## License

The Laravel + Livewire starter kit is open-sourced software licensed under the MIT license.
