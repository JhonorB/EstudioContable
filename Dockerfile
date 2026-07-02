FROM php:8.2-fpm

# Instalar dependencias del sistema operativo
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev

# Limpiar caché para aligerar la imagen
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalar extensiones PHP necesarias para Laravel y base de datos
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip

# Obtener Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configurar el directorio de trabajo
WORKDIR /var/www

# Copiar archivos del proyecto
COPY . /var/www

# Instalar dependencias de PHP (Omitiendo dev dependencies para producción)
RUN composer install --no-dev --optimize-autoloader || true

# Configurar permisos para las carpetas requeridas por Laravel
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache

EXPOSE 9000
CMD ["php-fpm"]
