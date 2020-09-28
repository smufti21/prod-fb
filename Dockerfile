FROM jmcarbo/nginx-php-fpm

WORKDIR /usr/share/nginx/html

COPY . .
