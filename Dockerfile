FROM trafex/php-nginx:3.0.0
LABEL Maintainer="Thornton Phillis (dev@th0rn0.co.uk)"

# ENV - App Defaults

ENV ENABLE_HTTPS false
ENV LOG_FILES false
ENV DB_MIGRATE false

# Files

USER root

RUN apk add --no-cache --virtual .build-deps \
	gcc \
	g++ \
	make

RUN apk add libmcrypt-dev \
    imagemagick \
    imagemagick-dev \
    openssl-dev

RUN apk add --no-cache \
        php81-session \
        php81-openssl \
        php81-json \
        php81-dom \
        php81-zip \
        php81-bcmath \
        php81-gd \
        php81-odbc \
        php81-gettext \
        php81-xmlreader \
        php81-xmlwriter \
        php81-xml \
        php81-simplexml \
        php81-bz2 \
        php81-iconv \
        php81-curl \
        php81-ctype \
        php81-pcntl \
        php81-posix \
        php81-phar \
        php81-opcache \
        php81-mbstring \
        php81-fileinfo \
        php81-tokenizer \
        php81-opcache \
        php81-pdo \
        php81-mysqli \
        php81-pdo_mysql \
        php81-pear \
        php81-fpm \
        php81-mbstring \
        php81-fileinfo \
        php81-pecl-imagick \
    	php81-dev

RUN pecl install imagick

RUN apk del .build-deps

USER nobody

COPY resources/docker/root/etc/nginx/nginx.conf /etc/nginx/conf.d/server.conf
COPY src/ /var/www/html

