#!/bin/bash

# Asegurarse de que exista el archivo de la base de datos SQLite si está configurado
if [ "$DB_CONNECTION" = "sqlite" ] || [ -z "$DB_CONNECTION" ]; then
    mkdir -p /var/www/html/database
    touch /var/www/html/database/database.sqlite
    chown -R www-data:www-data /var/www/html/database
    # Ejecutar migraciones automáticamente
    php artisan migrate --force
fi

# Iniciar Apache en primer plano
exec apache2-foreground
