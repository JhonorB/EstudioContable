FROM php:8.2-apache

# Habilitar mod_rewrite de Apache para Laravel
RUN a2enmod rewrite

# Cambiar DocumentRoot al directorio public de Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Variables de entorno predeterminadas para Render (así no tienes que ponerlas a mano)
ENV APP_ENV=production
ENV APP_DEBUG=false
ENV APP_URL=https://estudiocontable-jmp0.onrender.com
ENV DB_CONNECTION=sqlite
ENV APP_KEY=base64:ckpsqaLl0GADCH7VFxHIqBmC/6l4YcBdBO72JzZrWY8=

# Instalar dependencias del sistema y extensiones PHP
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev \
    sqlite3 \
    libsqlite3-dev

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip

# Obtener Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copiar archivos del proyecto
COPY . /var/www/html

# Instalar dependencias de PHP
RUN composer install --no-dev --optimize-autoloader || true

# Configurar permisos para Apache
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Copiar y dar permisos al script de inicio
COPY start.sh /usr/local/bin/start.sh
RUN chmod +x /usr/local/bin/start.sh

# Exponer el puerto 80 (Render detecta este puerto automáticamente)
EXPOSE 80

CMD ["/usr/local/bin/start.sh"]
