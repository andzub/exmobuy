<?php
class Shop extends Core
{
    public function fetch()
    {
        $array_vars = array();
        return $this->view->render('shop.html', $array_vars);
    }
}