## Portoflio

portfolio made with laravel, tailwindcss, docker

## Demo

https://portfolio-l0n4.onrender.com

## Installation with docker

1.Clone the project

    git@github.com:Moyhe/portfolio.git

2.Run composer install && npm install then

Navigate into project folder using terminal and run

    docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs

3.Copy .env.example into .env

    cp .env.example .env

4.Start the project in detached mode

    ./vendor/bin/sail up -d

5.start vite serever

    npm run dev

From now on whenever you want to run artisan command you should do this from the container.
Access to the docker container

    ./vendor/bin/sail bash

6.Set encryption key

    php artisan key:generate --ansi

7.Run migrations

    php artisan migrate
