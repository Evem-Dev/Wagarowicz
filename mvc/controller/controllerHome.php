<?php

class controllerHome extends Controller {
	public function __construct($action = NULL) {
		$view = $this->loadView('Home');
		if (!empty($action)) {
			$view->{ $action}();
		} else {
			$view->index();
		}
	}
}

?>