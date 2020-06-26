# Army


## Install
```
$ git clone https://github.com/Purt09/army.git 5fak
$ php init 
```
C настройками 0

Создаем БД.
Добавляем все таблицы от мудла
Добавляем все таблицы из дампа
```
$ composer install
$ psql -U postgres  //Только для создания базы, если уже создана, то не надо
$ CREATE DATABASE fakultet; // Аналогично выше
$ \q 
$ php yii migrate up
$ php yii rbac/init
```

##Требования к окружению
php 7.2+\
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
1) Устанавливаешь как обычно, но на постгр и желательно с доменом moodle5fak(или в params поменяй на свой)
2) Создаешь в корне файл autoauth.php с содержимым docs/autoauth.md (Это для автоматической адресации)
3) Находишь все в настойках веб службы
4) Включаешь их
5) Включаешь все протоколы
6) Создаешь сервис с любым названием
7) Добавляем нужные функции в созданный сервис и тестируем API Moodle Все функции, которые необходимо активировать, прописаны в docs/api_functions.md
8)Для проверки токена(и роботоспособности):
  https://moodle5fak/login/token.php?service=moodle_mobile_app&username=mymoodleuser&password=MySecretPassword
9) Должен вернуть токен доступа, если вернул, то все в порядке и можно работать
10) Не забудь в common/config/params-local.php поменять moodle_api_key  на новый 




