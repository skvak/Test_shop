Проект выполнен с использованием Bootstrap 3.3.6, Twig 1.24, MySQL 5.5, Codeigniter 3.0 PHP Framework.



Срок выполнения 5 дней.



Основные возможности:


1) Наличие админ панели http://larek/admin;

2) Возможность добавлять и удалять Категории товаров;

3) Возможность добавлять и удалять Товары в категории;

4) Возможность обрабатывать заказ - отмечать как Обработан и Удалять;

5) На главной странице сайта отображаются "рендомно" Товары с пометкой 
Специальное предложение в верхнем блоке товаров и четыре Товара, которых продано 
наибольшее количество;

6) При добавлении Категории товаров она автоматически добавляется в Панель меню
основного сайта;

7) Перед добавлением Товара в корзину можно выбрать количество приобретаемого товара;

8) Корзина отображается в верхней части страницы и отображает количество товаров и 
сумму заказа. Пока сессия жива, товары остаются в корзине, по истечению времени сессии
или после оформления заказа данные из корзины удаляются;

9) Форма оформления Заказа сделана с примитивной валидацией средствами HTML5.



Инструкция по разворачиванию мини-магазина:

1) создаем в MySQL пустую базу данных "larek" и импортируем в нее дамп db.sql;
	(например mysql -uЮЗЕР -pПАРОЛЬ larek < db.sql)

2) сохраняем папку с проектом в директории вашего веб-сервера, например /var/www/larek;

3) в файле /проект/application/config/database.php меняем данные для подключения к MySQL;

4) создаем VirtualHost в Apache, указываем сайт включенным и редактируем файл hosts.conf, перезапускаем Apache;

5) открываем в браузере http://larek/ 



Как выполнялась работа:

1) Были сделаны макеты всех страниц на Bootstrap, в формах использовались аттрибуты полей HTML5 
для простейшей валидации полей. Из этих макетов были созданы шаблоны с использованием шаблонизатора Twig.

2) С использованием коммандной строки была создана база данных "larek", а в MySQL Workbench были
созданы таблицы и заполнены первоначальные данные для тестирования. В этом проекте не использовались
Foreign Key, все зависимости в таблицах реализованы с помощью триггеров. Триггеры и дамп создавались
с использованием коммандной строки.

3) Основной функционал реализован с помощью фреймверка Codeigniter. Сначала был создан контроллер админ панели
и модель для нее, организован вывод и ввод данных в базу данных через админ панель и их корректное отображение.
После отладки админ панели был создан контроллер основной части проекта (пользовательской части), модель. Данные
подгружаются из БД и корректно отображаются на веб-страницах. 

4) Корзина сделана на основе библиотеки 'cart' фреймверка, используя сессии, она позволяет хранить данные о выбранных 
товарах, после заполнения формы оформления заказа создается заказ в БД и отображается в админ панели;

5) Для обеспечения связи товаров, категорий и заказов были написаны 3 триггера в MySQL:

	1 - при удалении Категории товаров в админ панели удаляются все товары этой категории;

	2 - при удалении Заказа из админ панели удаляются данные о заказчике и информация о его заказе;
	
	3 - при переводе статуса Заказа в состояние Обработан изменяется счетчик количества проданного товара для
	каждого товара из заказа на количество Заказанного товара.
