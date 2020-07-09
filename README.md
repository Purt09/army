# Army


## Install
```
$ git clone https://github.com/Purt09/army.git 5f.vka
$ composer install
$ php init 
```
C настройками 0
Желательно чтобы домен был 5f.vka (как на севрере)

Создаем БД.
Добавляем все таблицы от мудла
Добавляем все таблицы из дампа
```
$ psql -U postgres  //Только для создания базы, если уже создана, то не надо
$ CREATE DATABASE fakultet; // Аналогично выше
$ \q 
$ php yii migrate up
$ php yii rbac/init
```
Должны получится все таблицы в обной базе.

##Требования к окружению
php 7.0+\
Postgres 11.2+
###Начальные данные для входа:
admin 
\
Fas123456!

----
cadet 
\
fas123

##Установка мудл NEW
1) Устанавливаешь как обычно, но в папку 5f.vka
2) Создаешь в корне moodle файл autoauth.php с содержимым docs/autoauth.md (Это для автоматической адресации)
3) Также в корне moodle надо создать файлы .htaccess с содержимым
```
AddDefaultCharset UTF-8
RewriteEngine on

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d

RewriteRule . index.php
```
3) Находишь все настойки веб служб
4) Включаешь их
5) Включаешь все протоколы
6) Создаешь сервис с любым названием
7) Добавляем нужные функции в созданный сервис и тестируем API Moodle Все функции, которые необходимо активировать, прописаны в docs/api_functions.md
8)Для проверки токена(и роботоспособности):
  https://5f.vka/moodle/login/token.php?service=moodle_mobile_app&username=mymoodleuser&password=MySecretPassword
9) Должен вернуть токен доступа, если вернул, то все в порядке и можно работать
10) Не забудь в common/config/params-local.php поменять moodle_api_key  на новый 




