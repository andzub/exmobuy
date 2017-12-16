<?php
class Contacts extends Core
{
    public function fetch()
    {
        $array_vars = array();
        return $this->view->render('contacts.html', $array_vars);
    }
}