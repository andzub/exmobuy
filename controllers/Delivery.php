<?php
class Delivery extends Core
{
    public function fetch()
    {
        $array_vars = array();
        return $this->view->render('delivery.html', $array_vars);
    }
}