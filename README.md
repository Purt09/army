# Army


## Install
```
git clone https://github.com/Purt09/army.git 5fak
php init 
```
C настройками 0

Создаем БД с названием 5fak
```
composer install
psql -U postgres
CREATE DATABASE fakultet;
\q
php yii migrate up
php yii rbac/init
```
Далее настраиваем домен moodle.5fak на папку moodle \
И заходим на сайт, устанваливаем moodle
##Setting server
php 7.2+\
Postgres 11.2+
###User data:
admin 
\
Fas123456!

----
cadet 
\
fas123

Если муудл только установили, то необъодимо создать в нем в корне файл autoauth с содержимым autoauth.md

Включаем веб службы в муудл, включаем все протколы, Создаем новый сервис, Генерируем для него токен, заполняем данные в common/config/params 

Добавляем нужные функции в созданный сервис и тестируем API Moodle Все функции, которые необходимо активировать, прописаны в docs/api_functions.md

Для проверки токена(и роботоспособности):
https://moodle5fak/login/token.php?service=moodle_mobile_app&username=mymoodleuser&password=MySecretPassword

Должен вернуть токен доступа, если вернул, то все в порядке и можно работать
