FROM php:8.1-fpm

# set your user name, ex: user=carlos
ARG user=dev
ARG uid=1000

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath intl gd sockets
RUN docker-php-ext-configure intl

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Install redis
RUN pecl install -o -f redis \
    &&  rm -rf /tmp/pear \
    &&  docker-php-ext-enable redis

# Set working directory
WORKDIR /var/www

# Copy custom configurations PHP
COPY docker/php/custom.ini /usr/local/etc/php/conf.d/custom.ini

USER $user

# Set aliases
RUN echo 'alias a="php artisan"' >> ~/.bashrc
RUN echo 'alias pa="php artisan"' >> ~/.bashrc
RUN echo 'alias amodel="php artisan make:model"' >> ~/.bashrc
RUN echo 'alias acontroller="php artisan make:controller"' >> ~/.bashrc
RUN echo 'alias amigration="php artisan make:migration"' >> ~/.bashrc
RUN echo 'alias acomponent="php artisan make:component"' >> ~/.bashrc
RUN echo 'alias akey="php artisan key:generate"' >> ~/.bashrc
RUN echo 'alias aseeder="php artisan make:seeder"' >> ~/.bashrc
RUN echo 'alias afactory="php artisan make:factory"' >> ~/.bashrc
RUN echo 'alias amiddleware="php artisan make:middleware"' >> ~/.bashrc
RUN echo 'alias aobserver="php artisan make:observer"' >> ~/.bashrc
RUN echo 'alias aprovider="php artisan make:provider"' >> ~/.bashrc
RUN echo 'alias aresource="php artisan make:resource"' >> ~/.bashrc
RUN echo 'alias arule="php artisan make:rule"' >> ~/.bashrc
RUN echo 'alias atest="php artisan make:test"' >> ~/.bashrc
RUN echo 'alias aroute="php artisan route:list"' >> ~/.bashrc
RUN echo 'alias acache="php artisan cache:clear"' >> ~/.bashrc
RUN echo 'alias afresh="php artisan migrate:fresh"' >> ~/.bashrc
RUN echo 'alias amigrate="php artisan migrate"' >> ~/.bashrc
RUN echo 'alias aseed="php artisan db:seed"' >> ~/.bashrc
RUN echo 'alias alink="php artisan storage:link"' >> ~/.bashrc
