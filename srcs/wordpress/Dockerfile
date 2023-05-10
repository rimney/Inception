from debian:buster

RUN apt-get update

RUN apt-get install -y php7.3-fpm curl php7.3-mysql

CMD ["php-fpm7.3", "-F", "-R"]