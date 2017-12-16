<?php
class CatalogAdmin extends CoreAdmin
{

    public function fetch()
    {
        $products = new Products();
        $product_categories = new Categories();
        $request = new Request();
        $products_catalog = $products->getProducts();
        $product_cat = $product_categories->getCategories();
        
        // Удаление товара
        if($request->post('delete')) {
            $products->deleteProduct($request->post('product_id', 'integer'));
            header('Location: /admin/catalog/');
        }

        $array_vars = array(
            'products' => $products_catalog,
            'product_categories' => $product_cat
        );

        return $this->view->render('catalog.html', $array_vars);
    }

}