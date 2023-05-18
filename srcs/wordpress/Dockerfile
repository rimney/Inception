FROM debian:buster

RUN apt update

WORKDIR /var/www/html/wordpress/

RUN apt install -y  php7.3-fpm php7.3-mysql
RUN apt install -y wget

RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xvf latest.tar.gz
RUN mv wordpress/* ./
RUN rm -rf wordpress latest.tar.gz
RUN rm -f latest.tar.gz
RUN chmod 777 /var/www/html/wordpress/
RUN chmod 777 /var/www/html/
RUN rm -fr wp-config-sample.php
COPY ./conf/wp-config.php .
COPY ./tools/run.sh .
RUN mkdir -p /run/php/
RUN chmod +x run.sh
RUN chown -R www-data:1000 /var/www/html/wordpress
ENTRYPOINT [ "./run.sh" ]
CMD ["php-fpm7.3" ,"-F", "-R"]
