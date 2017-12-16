<?php 
class SignIn extends Core
{
    public function fetch()
	{
//		$obj = new Test();

		$array_vars = array(
			
		);

		return $this->view->render('sign_in.html', $array_vars);
	}
}