<?php

	/** FRONT CONTROLLER **/

	//1. Общие настройки

	//включаем отображение ошибок для диагностики
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	//2. Подключение файлов системы

	//определяем корневую директорию сайта в константу ROOT
	define('ROOT', dirname(__FILE__));
	require_once(ROOT . '/components/Router.php');

	//3. Установка соединения с БД

	//4. Вызов Router / Передача управления Router

	$router = new Router();
	$router->run();