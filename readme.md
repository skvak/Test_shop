Инструкция по разворачиванию мини-магазина:

1) создаем в MySQL пустую базу данных "larek" и импортируем в нее дамп db.sql;
	(например mysql -uЮЗЕР -pПАРОЛЬ larek < db.sql)
2) сохраняем папку с проектом в директории вашего веб-сервера, например /var/www/larek;
3) в файле /проект/application/config/database.php меняем данные для подключения к MySQL;
4) создаем VirtualHost в Apache, указываем сайт включенным и редактируем файл hosts.conf, перезапускаем Apache;
5) открываем в браузере http://larek/