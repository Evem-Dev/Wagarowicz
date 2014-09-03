<?php

abstract class Controller {

	public function __construct() {

	}

	public function loadView($name) {
		if (!empty($name)) {
			$name = 'view'.$name;
			$path = 'mvc/view/'.$name.'.php';
			if (is_file($path)) {
				require $path;
				return new $name;
			}
		}
	}

}

?>