<?php

class viewAccount extends View 
{
	private $model;
	protected $account_info;

			public function __construct()
			{
				$this->model = $this->loadModel('Account');

			}

			public function index()
			{
				if($this->model->auth())
				{
					$this->account_info = array('Login'=>$_SESSION['login']);

					$this->render('Account');

				}
				else
				{
					$this->render('Account/Login');
				}
			}

			public function login()
			{
				$r = $this->model->login($_POST['login'],$_POST['passwd']);

				
				header("Location: index.php?request=Account");
			}
			public function logout()
			{
				$this->model->logout();
				$this->index();
			}


			public function register()
			{	if( isset($_POST['login']) and isset($_POST['passwd1']) and isset($_POST['passwd2']))
				{
					
					$n = $this->model->createAccount($_POST['login'],$_POST['passwd1'],$_POST['passwd2']);
					if($n == "BOTH_OK||LOGIN_FREE")
					{
						$this->index();
					}
				}
				else
				{
					$this->render('Account/Register');
				}

				
			}

			

}


?>