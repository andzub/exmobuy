<?php
class EditCategoriesAdmin extends CoreAdmin
{
    public function fetch()
    {
        $category = new Categories();
        $request = new Request();
        $product_cat = new stdClass();

        // Выбераем одну категорию
        if($request->post('edit'))
        {
            $id = $request->post('id', 'integer');
            $product_cat = $category->getCategory($id);
        }

        // Обновляем категорию
        if($request->post('change'))
        {
            $product_cat->name = $request->post('name');
            $id = $category->updateCategory($request->post('category_id', 'integer'), $product_cat);
            header('Location: /admin/catalog/');
        }

        // Удаляем категорию
        if($request->post('delete'))
        {
            $id = $request->post('category_id', 'integer');
            $category->deleteCategory($id);
            header('Location: /admin/catalog/');
        }

        $array_vars = array(
            'category' => $product_cat
        );
        return $this->view->render('edit_categories.html', $array_vars);
    }
}