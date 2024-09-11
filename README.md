# Symfony Base Application

## First Time Setup

- Requirements
  - install [docker engine](https://docs.docker.com/engine/install/)
- used ports:
  - 8080 for web app
  - 33060 for mariadb
  - if already in use, change port mappings at: `docker/docker-compose.yml`

### Docker init
- 
- `cd docker`
- `docker compose build`
- `docker compose up`
- run `composer install` (see next chapter how)

## Composer install // symfony console 

- Connect to php container, e.g.:
  - `docker exec -it docker-php-fpm-1 ash -l`
- Composer:
  - `composer install`
- Symfony Console:
  -  console

## Web App

- Open in browser:
  - localhost:8080

## Xdebug

- Xdebug is enabled, make sure you use proper path mapping
- PhpStorm:
  - `/var/www` must map the absolute path to this `./app/` folder
  - phpunit can also be debugged, add remote interpreter / docker-compose