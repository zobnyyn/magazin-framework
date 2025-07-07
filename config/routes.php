<?php

use Wfm\Router;

// Конкретные маршруты раньше общих должны стоять, т.к. они более специфичные и будут перехватывать запросы раньше общих маршрутов
// Маршруты для админки
Router::add('^admin/?$', ['controller' => 'Admin', 'action' => 'index', 'admin_prefix'=> 'admin']); // Главная страница админки // ^admin/?$ - ^-начало строки, admin - слово, ? - один или ноль символов, $ - конец строки
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['controller' => 'Admin', 'action' => 'index', 'admin_prefix'=> 'admin']); // Универсальный маршрут для админки // ^admin/? - начало строки, admin - слово, ? - один или ноль символов, (?P<controller>[a-z-]+) - группа с именем controller, которая содержит одну или более букв или дефисов, /? - один или ноль символов, (?P<action>[a-z-]+) - группа с именем action, которая содержит одну или более букв или дефисов, $ - конец строки

// Маршруты для фронтенда
Router::add('^$', ['controller' => 'Main', 'action' => 'index']); // Главная страница // ^$ - ^-начало и $-конец строки, т.е. пустая строка
Router::add('^page/([0-9]+)$', ['controller' => 'Main', 'action' => 'index']); // Страница с номером // ^page/([0-9]+)$ - ^page/ - начало строки, ([0-9]+) - одна или более цифр, $ - конец строки
Router::add('^category/([a-z-]+)/([0-9]+)$', ['controller' => 'Category', 'action' => 'view']); // Страница категории с номером // ^category/ - начало строки, ([a-z-]+) - одна или более букв или дефисов, /([0-9]+) - слеш и одна или более цифр, $ - конец строки
Router::add('^product/([a-z-]+)/([0-9]+)$', ['controller' => 'Product', 'action' => 'view']); // Страница товара с номером // ^product/ - начало строки, ([a-z-]+) - одна или более букв или дефисов, /([0-9]+) - слеш и одна или более цифр, $ - конец строки
Router::add('^search$', ['controller' => 'Search', 'action' => 'index']); // Страница поиска // ^search$ - начало и конец строки, т.е. пустая строка
Router::add('^search/([a-z-]+)$', ['controller' => 'Search', 'action' => 'view']); // Страница поиска по запросу // ^search/ - начало строки, ([a-z-]+) - одна или более букв или дефисов, $ - конец строки
Router::add('^cart$', ['controller' => 'Cart', 'action' => 'index']); // Страница корзины // ^cart$ - начало и конец строки, т.е. пустая строка
Router::add('^cart/add/([0-9]+)$', ['controller' => 'Cart', 'action' => 'add']); // Добавление товара в корзину // ^cart/add/ - начало строки, /([0-9]+) - слеш и одна или более цифр, $ - конец строки
Router::add('^cart/delete/([0-9]+)$', ['controller' => 'Cart', 'action' => 'delete']); // Удаление товара из корзины // ^cart/delete/ - начало строки, /([0-9]+) - слеш и одна или более цифр, $ - конец строки
Router::add('^cart/checkout$', ['controller' => 'Cart', 'action' => 'checkout']); // Оформление заказа // ^cart/checkout$ - начало и конец строки, т.е. пустая строка
Router::add('^user/signup$', ['controller' => 'User', 'action' => 'signup']); // Регистрация пользователя // ^user/signup$ - начало и конец строки, т.е. пустая строка
Router::add('^user/login$', ['controller' => 'User', 'action' => 'login']); // Вход пользователя // ^user/login$ - начало и конец строки, т.е. пустая строка
Router::add('^user/logout$', ['controller' => 'User', 'action' => 'logout']); // Выход пользователя // ^user/logout$ - начало и конец строки, т.е. пустая строка
Router::add('^user/profile$', ['controller' => 'User', 'action' => 'profile']); // Профиль пользователя // ^user/profile$ - начало и конец строки, т.е. пустая строка
Router::add('^user/edit$', ['controller' => 'User', 'action' => 'edit']); // Редактирование профиля // ^user/edit$ - начало и конец строки, т.е. пустая строка
Router::add('^user/orders$', ['controller' => 'User', 'action' => 'orders']); // Заказы пользователя // ^user/orders$ - начало и конец строки, т.е. пустая строка
Router::add('^user/order/([0-9]+)$', ['controller' => 'User', 'action' => 'order']); // Просмотр заказа пользователя // ^user/order/ - начало строки, /([0-9]+) - слеш и одна или более цифр, $ - конец строки
Router::add('^nonexistent/route$', ['controller' => 'Error', 'action' => 'notfound']); // Тестовый маршрут для nonexistent/route // ^nonexistent/route$ - начало и конец строки, т.е. пустая строка
// Универсальный маршрут для контроллеров и действий
Router::add('^(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)/?$'); // Например: /blog/view или /user/profile // в массиве появится ключ контролер и всё что попадёт в скобки будет значением этого ключа, например: controller => blog, action => view
