<?php 
class Cart extends Core
{
    public function fetch()
    {
        $array_vars= array();

        return $this->view->render('cart.html', $array_vars);
    }
}