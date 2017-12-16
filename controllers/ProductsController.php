<?php
class ProductsController extends Core
{
    public function fetch()
    {
        $array_vars = array();
        return $this->view->render('products.html', $array_vars);
    }
}