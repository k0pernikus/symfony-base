FROM php:8.3-fpm-alpine

RUN apk --update --no-cache add \
        linux-headers \
        git \
        autoconf \
        g++ \
        make \
        libzip-dev \
        icu-libs \
        icu-dev \
        openssh \
    && pecl install -f xdebug \
    && docker-php-ext-install opcache pdo_mysql intl \
    && docker-php-ext-enable xdebug \
    && pecl install apcu \
    && docker-php-ext-enable apcu \
    && rm -rf /var/cache/apk/* \
    && { \
        echo "Port 22"; \
        echo "PermitRootLogin yes"; \
        echo "PasswordAuthentication yes"; \
        echo "Subsystem sftp /usr/lib/ssh/sftp-server"; \
    } > /etc/ssh/sshd_config \
    && echo "root:root" | chpasswd \
    && mkdir -p /run/sshd \
    && touch /tmp/xdebug.log \
    && chmod 777 /tmp/xdebug.log \
    && sed -i 's/#PermitRootLogin prohibit-password/PermitRootLogin yes/' /etc/ssh/sshd_config \
    && sed -i 's/#PasswordAuthentication yes/PasswordAuthentication yes/' /etc/ssh/sshd_config

COPY --from=composer /usr/bin/composer /usr/bin/composer

COPY start_services.sh /usr/local/bin/start_services.sh
COPY fix_directories.sh /usr/local/bin/fix_directories.sh

WORKDIR /var/www

EXPOSE 9000
EXPOSE 22

CMD ["/usr/local/bin/start_services.sh"]