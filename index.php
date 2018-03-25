<?php

//	$string = '21-01-2017';
//
//	$pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';
//
//	$replacement = 'Month: $2, Day: $1, Year: $3';
//
//	echo preg_replace($pattern, $replacement, $string);
//
//	die;

	/** FRONT CONTROLLER **/

	/**
	 *
	 * 1. Общие настройки
	 *
	 */

	//включаем отображение ошибок для диагностики
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	/**
	 *
	 * 2. Подключение файлов системы
	 *
	 */

	//определяем корневую директорию сайта в константу ROOT
	define('ROOT', dirname(__FILE__));
	require_once(ROOT . '/components/Router.php');
	require_once(ROOT . '/components/Db.php');

	/**
	 *
	 * 3. Установка соединения с БД
	 *
	 */

	/**
	 *
	 * 4. Вызов Router / Передача управления Router
	 *
	 */

	$router = new Router();
	$router->run();