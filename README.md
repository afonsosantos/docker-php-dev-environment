# Docker PHP development environment

Development setup with Nginx, PHP-FPM, phpMyAdmin, MySQL and Mailhog.

## Ports

- **Web**: `8080`
- **MySQL**: `3306`
- **phpMyAdmin**: `8180`
- **Mailhog**:
    - **SMTP**: `1025`
    - **Web UI**: `8280`

## Structure

Place all web content in the `./app/public` folder.

## First Time setup

1. `docker compose build`
2. `docker compose build [-d]`

## Notes

Use `root:dev` to login as administrator in phpMyAdmin.# docker-php-dev-environment
