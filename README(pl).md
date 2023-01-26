# Rooma
[![php - ^8.0.0](https://img.shields.io/badge/php-^8.0.0-2ea44f)](https://www.php.net/downloads.php)
[![xampp - ^8.0.0](https://img.shields.io/badge/xampp-^8.0.0-c174db)](https://www.apachefriends.org/pl/download.html)
[![composer - 2.5.1](https://img.shields.io/badge/composer-2.5.1-82b6e3)](https://getcomposer.org/download/)
[![npm - 18.13.0](https://img.shields.io/badge/npm-18.13.0-c8600c)](https://nodejs.org/en/download/)

Aplikacja webowa Laravel CRUD, za pomocą której można zarezerwować  apartament nad morzem Bałtyckim.

## Jak uruchomić lokalnie

Pobierz instalator Laravel za pomocą [composer](https://getcomposer.org/) i zainstaluj Laravel framework (vendor folder).

```bash
composer global require laravel/installer
composer install --ignore-platform-reqs
```

Zmień nazwę pliku **.env.example** na **.env**.

Wygeneruj klucz dla swojej lokalnej wersji aplikacji (pierwsze polecenie ustawia wartość APP_KEY). Usuń pliki konfiguracji z pamięci podręcznej.

```bash
php artisan key:generate 
php artisan config:clear
php artisan cache:clear
```

W **myPhpAdmin** stwórz bazę danych **rooma**.

Upewnij się również, że nie ma znaku **";"** przed linią **extension=pdo_mysql** w pliku **php.ini**.

Utwórz wszystkie niezbędne tabele.

```bash
php artisan migrate
```

Uruchom lokalny serwer (uruchom każde z tych poleceń w oddzielnych terminalach i pozostaw je uruchomione podczas eksploracji projektu).
```bash
npm install && npm run dev
php artisan serve
```

## Licencja

Framework Laravel jest oprogramowaniem typu open source na licencji [MIT license](https://opensource.org/licenses/MIT).
