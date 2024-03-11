<?php

namespace Core\Routing;

class Router
{
	/**
	 * @var Route[]
	 */
	private static array $routes = [];

	public static function add(string $method, string $uri, object $controller, string $action): void
	{
		$class = $controller::class;
		if (method_exists($class, $action) && !isset(self::$routes["$class$action"]))
		{
			self::$routes["$class$action"] = new Route(
				$method, function(...$variables) use ($controller, $action) {

				return $controller->$action(...$variables);
			},  $uri

			);
		}
	}

	public static function find(string $REQUEST_METHOD, string $REQUEST_URI): Route|false
	{

		$uriParts = explode('?', $REQUEST_URI);
		$uri = $uriParts[0];

		foreach (self::$routes as $route)
		{
			if ($route->match($REQUEST_URI) && $route->method === $REQUEST_METHOD)
			{
				return $route;
			}
		}

		return false;
	}
}