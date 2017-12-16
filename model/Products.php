<?php
class Products extends Database
{
    // добавить товар
    public function addProduct($product)
    {
        if(empty($product))
        {
            return false;
        }
        foreach($product as $column => $val)
        {
            $columns[] = $column;
            $values[] = "'".$val."'"; 
        }
        $column_sql = implode(',',$columns);
        $val_sql = implode(',', $values);

        $query = "INSERT INTO products ($column_sql) VALUES ($val_sql)";
        $this->query($query);
        return $this->resId();
    }
    // получить один товар
    public function getProduct($id)
    {
        if(empty($id))
        {
            return false;
        }
        $query = "SELECT product_id, name, description, category_id, price, url, visible, image FROM products WHERE product_id = $id LIMIT 1";
        $this->query($query);
        return $this->result();
    }
    // получить все товары
    public function getProducts()
    {
        $query = "SELECT product_id, name, category_id, description, price, url, visible, image FROM products";
        $this->query($query);
        return $this->results();
    }
    // обновить товар
    public function updateProduct($id, $product)
    {
        if(empty($id))
        {
            return false;
        }
        foreach($product as $column => $val) 
        {
            $columns[] = $column.'='."'".$val."'";
        }
        $column_sql = implode(',',$columns);

        $query = "UPDATE products SET $column_sql WHERE product_id = $id";
        $this->query($query);
        return $id;
    }
    // удалить товар 
    public function deleteProduct($id)
    {
        if(empty($id))
        {
            return false;
        }
        $query = "DELETE FROM products WHERE product_id = $id";
        $this->query($query);
    }
}