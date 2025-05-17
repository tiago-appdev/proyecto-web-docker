# Usar una imagen base con Apache y PHP
FROM php:8.2-apache

# Copiar los archivos del proyecto al directorio web
COPY . /var/www/html/

# Activar extensiones necesarias (como MySQLi)
RUN docker-php-ext-install mysqli

# Exponer el puerto 80
EXPOSE 80

