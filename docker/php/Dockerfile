FROM php:8.2-cli-bookworm

# Install system dependencies and PHP extensions required by Laravel.
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        git \
        unzip \
        libpng-dev \
        libzip-dev \
        libicu-dev \
        libonig-dev \
    && docker-php-ext-install -j"$(nproc)" \
        bcmath \
        intl \
        mbstring \
        pdo_mysql \
        zip \
    && rm -rf /var/lib/apt/lists/*

# Pin Composer version consistently across all machines.
COPY --from=composer:2.8 /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www/html

# Keep the container alive for exec commands.
CMD ["tail", "-f", "/dev/null"]
