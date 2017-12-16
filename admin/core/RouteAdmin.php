<?php
class RouteAdmin
{
    public static function run()
	{
		$controllers_dir = 'controllers/';

		$uri = parse_url($_SERVER['REQUEST_URI']);

		$uri_array = array(
			'/admin/' => 'MainAdmin',
			'/admin/catalog/' => 'CatalogAdmin',
			'/admin/product/' => 'ProductAdmin',
			'/admin/edit-product/' => 'EditProductAdmin',
			'/admin/edit-categories/' => 'EditCategoriesAdmin',
			'/admin/categories/' => 'CategoriesAdmin',
		);
		if ($uri['path']) {

			if (file_exists($controllers_dir . $uri_array[$uri['path']] . '.php')) {

				require $controllers_dir . $uri_array[$uri['path']] . '.php';
				$controller = new $uri_array[$uri['path']]();
				if (method_exists($controller, 'fetch')) {
				print $controller->fetch();
				} else {
					RouteAdmin::error404();
				}
			} else {
				RouteAdmin::error404();
			}
		}
	}

    public static function error404()
    {
        //page 404
        
    }
}