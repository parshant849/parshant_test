release: composer dump-autoload && php artisan migrate --force && php artisan config:cache && php artisan cache:clear
web: vendor/bin/heroku-php-apache2 public/
