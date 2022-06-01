<?php

/*
Класс-маршрутизатор для определения запрашиваемой страницы.
> цепляет классы контроллеров и моделей;
> создает экземпляры контролеров страниц и вызывает действия этих контроллеров.
*/
class Route
{

	static function start()
	{
		// контроллер и действие по умолчанию
		$controller_name = 'HomeController';
		$action = 'index';
		
		$routes = explode('/', $_SERVER['REQUEST_URI']);

		// получаем имя контроллера
		if ( !empty($routes[1]) )
		{	
			$controller_name = strtolower($routes[1]).'Controller';
            $controller_name = ucfirst($controller_name);
		}
		
		// получаем имя экшена
		if ( isset($_REQUEST['action']) )
		{
			$action = $_REQUEST['action'];
		}

		// добавляем префиксы
		$controller_file = $controller_name.'.php';


		// подцепляем файл с классом контроллера
		$controller_path = "./controllers/".$controller_file;
		if(file_exists($controller_path))
		{
			require $controller_path;
		}
		else
		{
			Route::ErrorPage404();
		}

		
		// создаем контроллер
		$controller = new $controller_name;
        if($controller_name !== 'SecurityController') {
            if (isset($_SESSION['user'])) {
                $controller->isAuth = true;
            } else {
                $controller->locate('/security');
            }
        }

		
		if(method_exists($controller, $action))
		{
			// вызываем действие контроллера
			$controller->$action();
		}
		else
		{
			Route::ErrorPage404();
		}
	
	}

	function ErrorPage404()
	{
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'NotFound');
    }
    
}
