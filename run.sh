#!/bin/sh

# Getting "vendor" folder locally (no composer needed on the host machine)
sudo docker run --rm -v $(pwd):/app composer install

# Make project owned by by your non-root use
chown -R $USER:$USER $(pwd)

# Running the app
sudo docker-compose up -d --build
sudo docker-compose exec app php artisan key:generate
sudo docker-compose exec app php artisan config:cache
sudo docker-compose exec app php artisan migrate
