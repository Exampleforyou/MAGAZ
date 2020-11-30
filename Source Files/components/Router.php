<?php

/**
 *  Router для index.php
 */
class Router 
{
	private $routes;

	function __construct()
    {
        $routespath = ROOTSF.'/config/routes.php';
        $this->routes = include $routespath;
    }

    function run()
	{
		//echo "class Router method run";

		// 1. Получить строку запроса
		if (!empty($_SERVER['REQUEST_URI'])) 
		{
			$uri = trim($_SERVER['REQUEST_URI'],  '/');
		}
		// 2. Проверить наличие такого запроса в routes.php
		foreach ($this->routes as $uriPattern => $path) 
		{
			//echo "`$uriPattern`", $uri;
			if (preg_match("`$uriPattern`", $uri)) 
			{
				//echo $path;			
				
				$internalRouse = preg_replace("`$uriPattern`", $path, $uri);
				//print_r($internalRouse);

		

		// 3. Если есть совпадение, определить какой констроллер и action обрабатывает запрос

					//!!!!!!!!ЗДЕСЬ ВСЕ ЧАСТИ ЗАПРОСА!!!!!!!!!!!!!!!!!!!!!!!!!

				$parts = explode('/', $internalRouse);
				//print_r($parts);

				$controllerName = array_shift($parts).'Controller';
				$controllerName = ucfirst($controllerName);

				$actionName = 'action'.ucfirst(array_shift($parts));

						//!!!!!!!!ЗДЕСЬ ПАРАМЕТРЫ ЗАПРОСА!!!!!!!!!!!!!!!!!!!!!!!!!			
				//echo "<br>Class: $controllerName<br>action: $actionName<br>";
				//print_r($parts);

				// 4. Подключить файл класса-контроллера
				$controllerFile = ROOTSF.'/controllers/'. $controllerName.'.php';
				if (file_exists($controllerFile))
				{
                    include_once($controllerFile);
				// 5. Создать объект, вызвать метод (action)
                    $controllerObject = new $controllerName;
                    //echo $actionName;
                    $result = call_user_func_array([$controllerObject,$actionName], $parts);
                    //			Для объекта			//call_user_func_array([Объект, функция], Сам массив, который будет передан по параметру)
                    if 		  //Это будет эквивалентно	$controllerObject->$actionName($parts[0],$parts[1] И.Т.Д)
                    ($result != null)
                    {
                        break;
                    }
                }
			}
		}
	}
}



