<?php
class CategoriesAdmin extends CoreAdmin
{
    public function fetch()
    {
        $product_categories = new Categories();
        $request = new Request();
        $product_category = new stdClass;

        if($request->method() == 'POST') 
        {   
            // добавление категории
            if($request->post('save'))
            {
                $product_category->name = $request->post('name');
                $product_category->url = CoreAdmin::translit($request->post('name'));
                $id = $product_categories->addCategory($product_category);
                
                $product_category = $product_categories->getCategory($id);
                header('Location: /admin/catalog/');
            }
        }

        $array_vars = array(
            'product_category' => $product_category,
        );
        return $this->view->render('category.html', $array_vars);
    }
}