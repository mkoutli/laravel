<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Deploy with docker

- Clone the repository
- Inside the project directory 
```run docker run --rm -v $(pwd):/app composer install```
This creates an ephemeral container that will be bind-mounted to the current directory before being removed. This will copy the contents of your directory to the container and also ensure that the vendor folder (Composer creates inside the container) is copied to your current directory
- The following command will generate a key and copy it to your .env file, ensuring that your user sessions and encrypted data remain secure:
```docker-compose exec app php artisan key:generate```
- To start all of the containers, create the volumes, and set up and connect the networks:
```docker-compose up -d```
- Once the process is complete, use the following command to list all of the running containers:
```docker ps```

## Deploy with Kubernetes
.....

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
