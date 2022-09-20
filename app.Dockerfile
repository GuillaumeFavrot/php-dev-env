FROM php:fpm

# The PHP fpm image comes with a command to install mysql drivers
RUN docker-php-ext-install pdo pdo_mysql

# The pecl package manager is included with the PHP image and allows to install xdebug, a useful PHP utiliy.
RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN mkdir /var/log/app-log

RUN chmod -R 777 /var/log/app-log
