<?php
class Database
{ 
    private $conn;
    private $res;
    public $results;
    // вызываем подключение
    public function __construct()
    {
        $this->connect();
    }
    // создаем подключение 
    public function connect()
    {
        if(isset($this->conn))
        {
            return $this->conn;
        } else {
            try
            {
                $this->conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e)
            {
                die("Ошибка подключения к MySql:" .$e->getMessage());
            }
           
        }
    }
    // выполняем запрос к бд 
    public function query($query)
    {
        if(empty($query))
        {
            return false;
        } else 
        {
            return $this->res = $this->conn->query($query);
        }
    }

    // вертаем все результаты
    public function results()
    {   
        while($res = $this->res->fetch(PDO::FETCH_ASSOC)) 
        {
            $this->results[] = $res;
        }
        return $this->results;
    }
    // вертаем один результат
    public function result()
    {
        return $this->res->fetch(PDO::FETCH_ASSOC);
    }
    // вертам id
    public function resId()
    {
        return $this->conn->LastinsertId();
    }
}