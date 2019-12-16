FROM debian:buster

RUN apt-get update

RUN apt upgrade

# install dependencies
RUN apt-get -y install nginx mariadb-server wget php-json php-mbstring php-fpm php-mysql

# get phpMyAdmin stuff
RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz \
	&& mkdir /var/www/html/phpmyadmin \
	&& tar -zxvf /phpMyAdmin-4.9.0.1-all-languages.tar.gz --strip-components=1 -C /var/www/html/phpmyadmin\ 
	&& rm -Rf /phpMyAdmin-4.9.0.1-all-languages.tar.gz

# get and create SSL certificates
RUN mkdir /certs \
	&& wget https://github.com/FiloSottile/mkcert/releases/download/v1.4.1/mkcert-v1.4.1-linux-amd64 \
	&& mv mkcert-v1.4.1-linux-amd64 /certs/mkcert \
	&& chmod +x /certs/mkcert \
	&& ./certs/mkcert -install \
	&& ./certs/mkcert localhost \
	&& mv localhost.pem /certs \
	&& mv localhost-key.pem /certs

EXPOSE 80
EXPOSE 443

# copy config files
COPY srcs/wordpress.tar.gz srcs/wordpress.tar.gz
COPY srcs/nginx.conf etc/nginx/sites-available/default
COPY srcs/config.inc.php /var/www/html/config.inc.php
COPY srcs/makeserver.sh makeserver.sh
RUN mkdir /var/www/html/wordpress
COPY srcs/wp-config.php var/www/html/wordpress/wp-config.php

# run .sh file
CMD bash makeserver.sh && nginx -g 'daemon off;'