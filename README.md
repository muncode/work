PHP - http://beee.zzz.com.ua/work/

SQL - файл SQL.sql

--------

PHP

Создать страницу с авторизацией пользователя: логин и пароль и реализовать в ней:
возможность регистрации пользователя (email, логин, пароль, ФИО),
при входе в "личный кабинет" возможность сменить пароль и ФИО.
использовать "чистый" PHP 5.6 и выше (без фреймворков) и MySQL 5.5 и выше, дизайн не важен, верстка тоже простая. Наворотов не нужно, хотим посмотреть просто Ваш код.

SQL

Есть 2 таблицы

таблица пользователей:
users
----------
`id` int(11)
`email` varchar(55)
`login` varchar(55)

и таблица заказов
orders
--------
`id` int(11)
`user_id` int(11)
`price` int(11)

Необходимо :
составить запрос, который выведет список email'лов встречающихся более чем у одного пользователя
вывести список логинов пользователей, которые не сделали ни одного заказа
вывести список логинов пользователей которые сделали более двух заказов

Cрок на выполнение - 2 дня