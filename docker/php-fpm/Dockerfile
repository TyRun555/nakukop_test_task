FROM php:8.0.0-fpm

ARG USER_ID
ARG GROUP_ID

RUN apt update -y && apt upgrade -y
RUN apt install -y nano git libzip-dev zip curl

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

# Add new extensions here
RUN pecl install xdebug-3.0.4 && docker-php-ext-enable xdebug
RUN docker-php-ext-install zip


RUN chmod +x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions http curl

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN groupadd -g "$GROUP_ID" testapp
RUN useradd -l -u "${USER_ID}" -g testapp testapp
USER testapp
WORKDIR /var/www