FROM th0rn0/php-nginx-base:latest
MAINTAINER Thornton Phillis (dev@th0rn0.co.uk)

# ENV - App Defaults

ENV ENABLE_HTTPS false
ENV LOG_FILES false
ENV DB_MIGRATE false

# Files

COPY resources/docker/root /
WORKDIR $NGINX_DOCUMENT_ROOT
COPY src/ $NGINX_DOCUMENT_ROOT


RUN sed -i 's/;clear_env/clear_env/' /etc/php7/php-fpm.d/www.conf
RUN sed -i 's/memory_limit = 128M/memory_limit = 512M/' /etc/php7/php.ini
RUN sed -i 's/upload_max_filesize = 2M/upload_max_filesize = 512M/' /etc/php7/php.ini
RUN sed -i 's/post_max_size = 8M/post_max_size = 512M/' /etc/php7/php.ini

# Default Command

ENTRYPOINT ["/run/docker-entrypoint.sh"]
