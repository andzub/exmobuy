<?php
class Request
{
    public function method($method = null)
    {
        if(!empty($method))
            return strtolower($_SERVER['REQUEST_METHOD']) == strtolower($method);
        return $_SERVER['REQUEST_METHOD'];
    }

    /**
    * Возвращает пременную _GET отфильтрованную по заданому типу, если во втором параметре указан тип фильтра
    * Второй праметр $type может иметь такие значения: integer, string, boolen
    * Если $type не задан, возвращает пременную в чистом виде
    */
    public function get($name, $type = null)
    {
        $val = null;
        if(isset($_GET[$name]))
            $val = $_GET[$name];
        
        if(!empty($type) && is_array($val))
            $val = reset($val);
        
        if($type == 'string')
            return strval(preg_replace('/[^\p{L}\p{Nd}\d\s_\-\.\%\s]/ui', '', $val));

        if($type == 'integer')
            return intval($val);
        if($type == 'boolean')
            return !empty($val);

        return $val;
    }

    /**
    * Возвращает пременную _POST отфильтрованную по заданому типу, если во втором параметре указан тип фильтра
    * Второй праметр $type может иметь такие значения: integer, string, boolen
    * Если $type не задан, возвращает пременную в чистом виде
    */
    public function post($name = null, $type = null)
    {
        $val = null;
        if(!empty($name) && isset($_POST[$name]))
            $val = $_POST[$name];
        elseif(empty($name))
            $val = file_get_contents('php://input');
        
        if($type == 'string')
            return strval(preg_replace('/[^\p{L}\p{Nd}\d\s_\-\.\%\s]/ui', '', $val));

        if($type == 'integer')
            return intval($val);
        if($type == 'boolean')
            return !empty($val);

        return $val;
    }

    /** 
    * Возвращает переменную _FILES
    * Обычно переменные _FILES являются двухмерными массивами, поэтому можно указывать второй параметр
    * нпример, чтобы получить имя загружаемого файла $filename = $cms->request->files('myfile', 'name'); 
    */
    public function files($name, $name2 = null)
    {
        if(!empty($name2) && !empty($_FILES[$name][$name2]))
            return $_FILES[$name][$name2];
        elseif(empty($name) && !empty($_FILES[$name]))
            return $_FILES[$name];
        else
            return null;
    }

}