SRCS = docker-compose.yml

up:
	@mkdir -p /home/rimney/data/wordpress
	@mkdir -p /home/rimney/data/mariadb
	docker-compose -f $(SRCS) up --build

down:
	docker-compose -f $(SRCS) down

clean:
	docker-compose -f $(SRCS) down
	rm -rf /home/rimney/data/wordpress/*
	rm -rf /home/rimney/data/dbdata/*

vclean: clean
	docker volume prune -f