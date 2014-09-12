<?php

class viewHome extends View {
	private $model;

	public function __construct() {
		$this->model = $this->loadModel('Home');
	}

	public function index() {
		$this->render('Home');

	}
}