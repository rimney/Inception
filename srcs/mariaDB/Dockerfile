FROM debian:buster

RUN apt update 

RUN apt install -y mariadb-server 

ARG MYSQL_HOSTNAME MYSQL_USER MYSQL_PASSWORD MYSQL_ROOT_PASSWORD

COPY ./tools/setup_db_user.sh /

COPY ./tools/database.sql /

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

RUN chmod +x /setup_db_user.sh

RUN  ./setup_db_user.sh
CMD ["mysqld"]