up:
	docker-compose up --build -d --remove-orphans
down:
	docker-compose down
restart:
	make down && make up
composer-install:
	docker-compose run --rm php-fpm composer install
composer-update:
	docker-compose run --rm php-fpm composer update