<?php 
class EditProductAdmin extends CoreAdmin
{
    public function fetch()
    {
        $uploads_dir = "../files/uploads/";
        $uploadsOk = 1;

        $products = new Products();
        $request = new Request();
        $product_edit = new stdClass();
        
        // Выбираем один товар 
        if($request->post('edit'))
        {
            $id = $request->post('product_id', 'integer');
            $product_edit = $products->getProduct($id);
        }

        // Принимаем данные для обновления товара
        if($request->post('save'))
        {
            $product_edit->name = $request->post('name');
            $product_edit->description = $request->post('description');
            $product_edit->price = $request->post('price', 'integer');

            // обработка изображения перед загрузкой
            $uploads_file = $uploads_dir.basename($request->files('image', 'name'));

            // проверить размер файла
            if($request->files('image', 'size') > 500000) 
            {
                $uploadOk = 0;
            }

            // проверка типа файла
            $imageFileType = pathinfo($uploads_file, PATHINFO_EXTENSION); 
            if($imageFileType != 'jpg' && 
               $imageFileType != 'png' && 
               $imageFileType != 'jpeg' &&
               $imageFileType != 'gif') 
            {
                $uploadOk = 0;
            }
            // проверка, если $uploadOk не является 0, то заушружаем файл 
            if($uploadsOk !== 0)
            {
                move_uploaded_file($request->files('image', 'tmp_name'), $uploads_file);
                $product_edit->image = basename($request->files('image', 'name'));
            }

             // Проверка, если url существует
            if(empty($request->post('url'))) 
            {
                $product_edit->url = CoreAdmin::translit($request->post('name'));
            } else 
            {
                $product_edit->url = $request->post('url');
            }

            $id = $products->updateProduct($request->post('product_id', 'integer'), $product_edit);
            header('Location: /admin/catalog/');
        }

        $array_vars = array(
            'product' => $product_edit
        );

        return $this->view->render('edit_product.html', $array_vars);
    }
}