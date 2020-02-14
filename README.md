Simple Laravel Docker Boiterplate (with JWT)

## Set Up

- docker-compose up -d

- docker exec -it laravel /bin/bash

- composer install

- php artisan jwt:secret

- php artisan migrate --seed

## Test it on Postman

- POST http://127.0.0.1:80/api/auth/login -> Generates a Bearer Authorization Token

- GET http://127.0.0.1:80/api/pokemon -> Sample Endpoint, Don't forget to Pass the Token
