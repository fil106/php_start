<?php

	class Router {

		private $routes;

		public function __construct() {

			$routerPath = ROOT.'/config/routes.php';
			$this->routes = include($routerPath);

		}

		public function run() {

			// Получить строку запроса
			if (!empty($_SERVER['REQUEST_URI'])) {
				$uri = trim($_SERVER['REQUEST_URI'], '/');
			}
			echo $uri;

			// Проверить наличие такого запроса в routes.php

			// Если есть совпадение, определить какой контроллер и action обрабатывают запрос

			// Подключить файл класса-контроллера

			// Создать объект, вызвать метод (т.е. action)

		}

	}