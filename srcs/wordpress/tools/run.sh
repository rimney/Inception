#!/bin/bash

wp core download --allow-root

wp core config --dbname=${MYSQL_DATABASE} --dbuser=${MYSQL_USER} --dbpass=${MYSQL_PASSWORD} --dbhost=${MYSQL_HOSTNAME} --allow-root

wp core install --url=${DOMAIN_NAME} --title=inception --admin_user=${WP_ADMIN_USER} --admin_password=${WP_ADMIN_PW} --admin_email=${WP_ADMIN_EMAIL} --allow-root

wp user create ${WP_USER} ${WP_EMAIL} --role=author --user_pass=${WP_PW} --allow-root

exec $@
