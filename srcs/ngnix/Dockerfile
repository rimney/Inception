FROM debian:buster

RUN apt-get update && apt-get install -y nginx
RUN rm /etc/nginx/nginx.conf
COPY nginx.conf /etc/nginx
COPY site /usr/share/nginx/html/
COPY script.sh / 
VOLUME /usr/share/nginx/html
VOLUME /etc/nginx


CMD ["nginx", "-g", "daemon off;"]
