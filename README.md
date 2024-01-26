Для запуска проекта необходимо чтобы на локальном устройстве была установлена mysql

В терминале выполнить следеющие команды

cd back
composer install && php artisan migrate && php artisan serve 

В другом окне терминала

cd front && npm i && npm run serve