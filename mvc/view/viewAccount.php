<?php

class viewAccount extends View 
{
	private $model;

			public function __construct()
			{
				$this->model = $this->loadModel('Account');

			}

			public function index()
			{
				if($this->model->auth())
				{
					$this->render('Account/Profile');
				}
				else
				{
					$this->render('Account/Login');
				}
			}


			public function register()
			{
				$this->render('Account/Register');
			}

			

}


?>