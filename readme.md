создать файл .env

Выполнить в командной строке
composer install
npm install
npm run dev
php artisan make:auth
php artisan migrate
php artisan db:seed

Последняя команда генерит 5 статей, если мало можно еще раза запустить seeder для статей отдельно:
php artisan db:seed --class=PostsTableSeeder

Админ:
admin@admin.com
qwerty

регистрация закрыта