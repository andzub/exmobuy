<?php
class Route
{
	public static function run()
	{
		$controllers_dir = 'controllers/';
		$uri = parse_url($_SERVER['REQUEST_URI']);
		$uri_array = array(
			'/' => 'Main',
			'/vhod' => 'SignIn',
			'/registracia' => 'SignUp',
			'/poisk' => 'Search',
			'/korzina' => 'Cart',
			'/o-magazine' => 'Shop',
			'/prodykcia' => 'ProductsController',
			'/dostavka-i-oplata' => 'Delivery',
			'/contactu' => 'Contacts',
		);
		if ($uri['path']) {
			if (file_exists($controllers_dir.$uri_array[$uri['path']].'.php')) {
				require $controllers_dir.$uri_array[$uri['path']].'.php'; //controller/Main.php
				$controller = new $uri_array[$uri['path']](); // new Main();
				if (method_exists($controller, 'fetch')) {
				print $controller->fetch();
				} else {
					Route::error404();
				}
			} else {
				Route::error404();
			}
		}
	}

	public static function error404()
	{
		//page 404
	}
}