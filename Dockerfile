FROM php:8.2-apache

# Habilitar el módulo rewrite de Apache para Laravel
RUN a2enmod rewrite

# Cambiar la raíz de Apache a la carpeta public de Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

COPY . /var/www/html

RUN docker-php-ext-install pdo pdo_mysql

EXPOSE 80