FROM php:8.2-apache

# Instalar dependencias del sistema y herramientas necesarias
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Habilitar el módulo rewrite de Apache
RUN a2enmod rewrite

# Instalar Composer directamente desde la imagen oficial
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configurar la raíz de Apache a la carpeta public de Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# Copiar los archivos del proyecto
COPY . /var/www/html

# Instalar las extensiones de PHP necesarias para la base de datos
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Entrar al directorio de trabajo e instalar las dependencias de Laravel sin las de desarrollo
WORKDIR /var/www/html
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Dar permisos correctos a las carpetas de almacenamiento
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# ... (todo lo anterior se queda igual) ...

# Dar permisos correctos a las carpetas de almacenamiento
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Crear el archivo .env e inyectar tu clave real directamente
RUN cp .env.example .env || true
RUN sed -i 's|APP_KEY=.*|APP_KEY=base64:p/yIcGXQcfwtue/qa9YRnHrARKDwwTT/ns+I=|' .env

# Limpiar la caché para que asimile la clave
RUN php artisan config:clear

# Forzar a Laravel a mostrar el error real en la página web por si acaso
ENV APP_DEBUG=true
ENV APP_ENV=production

EXPOSE 80