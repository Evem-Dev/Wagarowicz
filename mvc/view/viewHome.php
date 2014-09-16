<?php

class viewHome extends View {
	private $model;

	public function __construct() {
		$this->model = $this->loadModel('Account');
	}

	public function index() {
	
		
			header("Location: index.php?request=Account");
	
	}
}