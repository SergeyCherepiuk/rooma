# Rooma
[![php - ^8.0.0](https://img.shields.io/badge/php-^8.0.0-2ea44f)](https://www.php.net/downloads.php)
[![xampp - ^8.0.0](https://img.shields.io/badge/xampp-^8.0.0-c174db)](https://www.apachefriends.org/pl/download.html)
[![composer - 2.5.1](https://img.shields.io/badge/composer-2.5.1-82b6e3)](https://getcomposer.org/download/)
[![npm - 18.13.0](https://img.shields.io/badge/npm-18.13.0-c8600c)](https://nodejs.org/en/download/)

Laravel CRUD web application with the help of which you can reserve an apartment on the Baltic Sea sealine.

## How to run locally

Run the script **run.sh**

```bash
./run.sh
```

or

Download the Laravel installer using [composer](https://getcomposer.org/) and install Laravel core (vendor folder).

```bash
composer global require laravel/installer
composer install --ignore-platform-reqs
```

Change **.env.example** file to **.env**.

Generate key for your local version of web application (first command sets the APP_KEY value). Remove the configuration cache files.

```bash
php artisan key:generate 
php artisan config:clear
php artisan cache:clear
```

In **myPhpAdmin** create database called **rooma**.

Also make sure there is no **";"** character before **extension=pdo_mysql** line in your **php.ini** file.

Create all the necessary tables.

```bash
php artisan migrate
```

Run the local server (run each of these commands in separate terminal tabs and leave them running while you exploring the project).
```bash
npm install && npm run dev
php artisan serve
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
