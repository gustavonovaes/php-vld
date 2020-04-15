FROM php:7.4-cli

RUN pear config-set preferred_state beta

RUN pecl -q install vld \
  && docker-php-ext-enable vld
  