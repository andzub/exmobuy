<?php
class SignUp extends Core
{
    public function fetch()
    {
        $array_vars = array();
        return $this->view->render('sign_up.html', $array_vars);
    }
}