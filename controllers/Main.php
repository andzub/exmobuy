<?php
class Main extends Core
{
	public function fetch()
	{

		$products = new Products();
		$product_categories = new Categories();

		$products_main = $products->getProducts();
		$product_cat = $product_categories->getCategories();

		$array_vars = array(
			'products' => $products_main,
			'product_categories' => $product_cat
			);

		return $this->view->render('main.html', $array_vars);
	}
}