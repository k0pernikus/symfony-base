FROM php:8.3-fpm-alpine

RUN apk --update --no-cache add  \
		linux-headers \
		git \
		autoconf \ 
		g++ \ 
		make
RUN  pecl install -f xdebug
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-enable xdebug

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
CMD php-fpm 
EXPOSE 9000
