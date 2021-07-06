install PHP-7.4+

install MySQL

install composer

cd /var/www/html

https://github.com/ivan-drachov/small-project.git

cd small-project

composer install

define database, APP_KEY in .env

php artisan migrate --seed

php artisan serve
