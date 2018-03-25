<?php

	class Router
	{

		private $routes; // Приватная переменная для хранения маршрутов из файла routes.php

		public function __construct()
		{

			$routerPath = ROOT.'/config/routes.php';
			$this->routes = include($routerPath); //записываем в свойство routes маршруты из файла routes.php

		}

		/**
		 *
		 * Return request string
		 *
		 */
		private function getURI()
		{

			if (!empty($_SERVER['REQUEST_URI'])) {
				return trim($_SERVER['REQUEST_URI'], '/');
			}

		}

		public function run()
		{

			// Получить строку запроса
			$uri = $this->getURI();

			// Проверить наличие такого запроса в routes.php
			foreach ($this->routes as $uriPattern => $path)
			{

				//Сравниваем $uriPattern и $uri
				if (preg_match("~$uriPattern~", $uri))
				{

					$internalRoute = preg_replace("~$uriPattern~", $path, $uri);

					//Определить какой контроллер и action обрабатывают запрос

					//$segments = explode('/', $path);
					//
					//$controllerName = array_shift($segments).'Controller';
					//$controllerName = ucfirst($controllerName); //делает первую букву заглавной
					//
					//$actionName = 'action'.ucfirst(array_shift($segments));

					//Определить контроллер, action, параметры

					$segments = explode('/', $internalRoute);

					$controllerName = array_shift($segments).'Controller';
					$controllerName = ucfirst($controllerName);

					$actionName = 'action'.ucfirst(array_shift($segments));

					$parameters = $segments;

					//Подключить файл класса-контроллера
					$controllerFile = ROOT."/controllers/$controllerName.php";

					//Подключаем файл контроллера, если тот существует
					if (file_exists($controllerFile))
					{
						include_once($controllerFile);
					}

					//Создание экземпляра класса нужного контроллера
					$controllerObject = new $controllerName;

					//Передаем параметры в нужный метод нужного контроллера
					//вариант 1
					//$result = $controllerName->$actionName($parameters);
					//
					//варинат 2 (лучше)

					$result = call_user_func_array(array($controllerObject, $actionName), $parameters);

					//напоследок проверяем что вернул нам метод, если ничего не вернул, то прервем выполнение текущего метода
					if ($result != null)
					{
						break;
					}

				}

			}

		}

	}