<?php
class Search extends Core
{
  public function fetch()
  {
    $array_vars = array();
    return $this->view->render('search.html', $array_vars);    
  }

}