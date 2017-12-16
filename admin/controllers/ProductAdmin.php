<?php
class ProductAdmin extends CoreAdmin
{
    public function fetch()
    {
        $uploads_dir = '../files/uploads/';     
        $uploadOk = 1;

        $products = new Products();
        $categories = new Categories();
        $request = new Request();
        $product = new stdClass();

        if($request->method() == 'POST') 
        {
            $product->name = $request->post('name');
            $product->description = $request->post('description');
            $product->price = $request->post('price', 'integer');
            $product->visible = $request->post('visible', 'integer');
            $product->category_id = $request->post('category_id');

            // обработка изображения перед загрузкой
            $uploads_file = $uploads_dir.basename($request->files('image','name'));
        
            // проверить размер файла
            if($request->files('image', 'size') > 500000) 
            {
                $uploadOk = 0;
            }
            // проверить допустимый тип файла
            $imageFileType = pathinfo($uploads_file, PATHINFO_EXTENSION); 
            if($imageFileType != 'jpg' && 
               $imageFileType != 'png' && 
               $imageFileType != 'jpeg' &&
               $imageFileType != 'gif') 
            {
                $uploadOk = 0;
            }
            // проверка, если $uploadOk не является 0, то заушружаем файл 
            if($uploadOk !== 0) {
                move_uploaded_file($request->files('image','tmp_name'),$uploads_file);
                $product->image = basename($request->files('image','name'));
            }
            // Проверка, если url существует
            if(empty($request->post('url'))) 
            {
                $product->url = CoreAdmin::translit($request->post('name'));
            } else 
            {
                $product->url = $request->post('url');
            }

            // вызов методов
            if($request->post('product_id', 'integer'))
            {
                // обновление товара
                $id = $products->updateProduct($request->post('product_id', 'integer'), $product);
                
            } else 
            {
                // добавление товара
                $id = $products->addProduct($product);
                header('Location: /admin/catalog/');
            }

            $product = $products->getProduct($id);
        }
        // Получить все категории
        $categories = $categories->getCategories();
        print_r($categories);

        $array_vars = array(
            'product' => $product,
            'categories' => $categories
        );
        return $this->view->render('product.html', $array_vars);
    }
}