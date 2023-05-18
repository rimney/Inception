FROM debian:buster

RUN apt-get update && apt-get -y install nginx \
openssl \
&& rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html/wordpress/
RUN  chmod 755 /var/www/html/wordpress/
RUN  mkdir -p /etc/nginx/certif

COPY ./tools/* /etc/nginx/certif
COPY ./conf/default  /etc/nginx/sites-available/

7EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]
