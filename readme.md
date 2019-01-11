создать файл .env

Выполнить в командной строке<br>
composer install<br>
npm install<br>
php artisan key:generate<br>
php artisan migrate<br>
php artisan db:seed<br>

Последняя команда генерит 5 статей, если мало можно еще раза запустить seeder для статей отдельно:<br>
php artisan db:seed --class=PostsTableSeeder

Админ:<br>
admin@admin.com<br>
qwerty<br>

регистрация закрыта