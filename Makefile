run:
	cd ./php \
      && make run \
      && cd ../nginx \
      && make run

phpstan:
	docker exec my-php-fpm /bin/sh -c "cd /var/www/src && php composer.phar --ansi phpstan"
