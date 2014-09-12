<?php

abstract class View {

	public function __construct() {

	}

	public function loadModel($name) {
		$path = 'mvc/model/model'.$name.'.php';
		$name = 'model'.$name;
		if (is_file($path)) {
			require $path;
			return new $name;
		}
	}

	public function render($name) {
		if (!empty($name)) {
			$path = 'templates/'.$name.'/index.php';
			if (is_file($path)) {
				require $path;
			}
		}
	}
}

?>