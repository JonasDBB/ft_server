# start mysql
service mysql start

yes | mysql_secure_installation

# php & mysql setup
chown -R www-data:www-data /var/www/html/phpmyadmin
mysql < /var/www/html/phpmyadmin/sql/create_tables.sql -u root -php
mysql --execute="GRANT ALL PRIVILEGES ON phpmyadmin.* TO 'jonas'@'localhost' IDENTIFIED BY 'pmapass'; FLUSH PRIVILEGES;"
echo "cgi.fix_pathinfo=0" >> /etc/php/7.3/fpm/php.ini

# wordpress file extraction
tar xzf /srcs/wordpress.tar.gz --strip-components=1 -C /var/www/html/wordpress
chown -R www-data:www-data /var/www/html/wordpress
# wordpress setup
mysql --execute="CREATE DATABASE jonasdb; GRANT ALL PRIVILEGES ON jonasdb.* TO 'jonas'@'localhost' IDENTIFIED BY 'pmapass'; FLUSH PRIVILEGES;"

# start services
service mysql restart
/etc/init.d/php7.3-fpm start
