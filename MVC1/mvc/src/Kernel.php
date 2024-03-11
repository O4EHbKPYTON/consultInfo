<?php

namespace App;

use Core\Routing\Router;

class Kernel
{
    public function run()
    {
		$uri = strtok($_SERVER['REQUEST_URI'], '?'); // Strip query parameters from URI
		$route = Router::find($_SERVER['REQUEST_METHOD'], $uri);


		if ($route)
        {
            $action = $route->action;
			$action(...$route->getVariables());
            return;
        }

        http_response_code(404);
        echo 'Page not found';
    }
}