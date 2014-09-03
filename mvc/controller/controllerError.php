<?php

class controllerError extends Controller 
{

			public function __construct($action = NULL)
			{
				$view = $this->loadView('Error');
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