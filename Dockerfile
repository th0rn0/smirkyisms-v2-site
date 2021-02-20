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

# Default Command

ENTRYPOINT ["/run/docker-entrypoint.sh"]
