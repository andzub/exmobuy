<?php
class Categories extends Database
{
    // добавить категорию
    public function addCategory($product_category)
    {
        if(empty($product_category))
        {
            return false;
        }
        foreach($product_category as $column => $val)
        {
            $columns[] = $column;
            $values[] = "'".$val."'"; 
        }
        $column_sql = implode(',',$columns);
        $val_sql = implode(',', $values);

        $query = "INSERT INTO categories ($column_sql) VALUES ($val_sql)";
        $this->query($query);
        return $this->resId();
    }

    // получить все категории
    public function getCategories()
    {
        $query = "SELECT category_id, name, url FROM categories";
        $this->query($query);
        return $this->results();
    }

     // получить одну категорию
     public function getCategory($id)
     {
         if(empty($id))
         {
             return false;
         }
         $query = "SELECT category_id, name, url FROM categories WHERE category_id = $id";
         $this->query($query);
         return $this->result();
     }

     // обновить категорию
     public function updateCategory($id, $product_category)
     {
         if(empty($id))
         {
             return false;
         }
         foreach($product_category as $column => $val) 
         {
             $columns[] = $column.'='."'".$val."'";
         }
         $column_sql = implode(',',$columns);
 
         $query = "UPDATE categories SET $column_sql WHERE category_id = $id";
         $this->query($query);
         return $id;
     }

     // удалить товар 
    public function deleteCategory($id)
    {
        if(empty($id))
        {
            return false;
        }
        $query = "DELETE FROM categories WHERE category_id = $id";
        $this->query($query);
    }
}