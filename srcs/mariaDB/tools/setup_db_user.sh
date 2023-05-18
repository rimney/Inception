#!/bin/bash

service mysql start
# Creating a Database and User for WordPress
# mysql -u root -e "CREATE DATABASE IF NOT EXISTS $MYSQL_DATABASE;"
# mysql -u root -e "CREATE USER IF NOT EXISTS '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD';"
# mysql -u root -e "GRANT ALL ON $MYSQL_HOSTNAME.* TO '$MYSQL_USER'@'%';"
# mysql -u root -e "FLUSH PRIVILEGES;"
# mysql -u root  mariadb < database.sql
#mysql -u root -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '$MYSQL_ROOT_PASSWORD';"
