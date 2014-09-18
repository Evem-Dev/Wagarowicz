<?php

class viewAccount extends View 
{
	private $model;
	protected $account_info;
	
			public function __construct()
			{
				$this->model = $this->loadModel('Plan');
				
			}

			public function index()
			{
				if($this->model->auth())
				{
					
					$this->account_info = array('Login'=>$_SESSION['login']);

					$this->profile();

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


/////////////////////////////////////////////
		public $len;
		public $pn;
		public $wt;
		public $sr;
		public $cz;
		public $pt;
		public $absent;
		public function profile()
		{
			if($this->model->auth())
			{
				$plan = $this->model->getPlan();
				$this->absent = $this->model->getAllAbsent();
				$this->pn = $plan['pn'];
				$this->wt = $plan['wt'];
				$this->sr = $plan['sr'];
				$this->cz = $plan['cz'];
				$this->pt = $plan['pt'];
				$this->len = max(sizeof($this->pn),sizeof($this->wt),sizeof($this->sr),sizeof($this->cz),sizeof($this->pt));




				$this->render('Account');
			}
		}




			//Actions


			public function addplan()
			{
				if(isset($_GET['day']))
				{
					$this->model->createPlan($_GET['day']);
				}
				$this->render('Plan/Add');
			}


}


?>