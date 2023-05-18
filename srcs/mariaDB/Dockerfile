FROM debian:buster

RUN apt-get update \
    && apt install mariadb-server -y

ARG MYSQL_DATABASE MYSQL_USER MYSQL_PASSWORD MYSQL_ROOT_PASSWORD

COPY ./tools/setup_db_user.sh /

COPY  ./tools/database.sql /

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

RUN chmod +x setup_db_user.sh && ./setup_db_user.sh

RUN chmod +x /setup_db_user.sh

RUN ./setup_db_user.sh

CMD  [ "mysqld"]