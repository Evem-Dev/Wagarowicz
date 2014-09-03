<?php
class controllerHome extends Controller 
{
	public function __construct($action = NULL)
	{
		$view = $this->loadView('Account');
		if(!empty($action))
		{
			$view->{$action}();
		}
		else
		{
			$view->index();
		}
	}
}

?>