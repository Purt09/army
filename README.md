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
Далее настраиваем домен moodle.5fak к папку moodle \
И заходим на домен, устанваливаем moodle
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
