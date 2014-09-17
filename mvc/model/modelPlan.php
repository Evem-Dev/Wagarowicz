<?php

require 'mvc/model/modelAccount.php';
class modelPlan extends modelAccount
{

	private $plan;
	private $attendence;
	private $subjects;

	public function __construct()
	{
		parent::__construct();
		if($this->auth())
		{
			$l = $_SESSION['login'];
			$handle = $this->db->query("select * from users where login='$l'");
			$result = $handle->fetch(PDO::FETCH_ASSOC);
			$this->plan = unserialize($result['plan']);
			$this->attendence = unserialize($result['attendence']);
			$this->subjects = unserialize($result['subjects']);
		}

	}
	public function updateDB($field = NULL)
	{
		if($this->auth())
		{	
				$l = $_SESSION['login'];
				if(!empty($field))
				{
					switch ($field) {
						case 'attendence':
							$val = serialize($this->attendence);						
							$this->db->exec("update users set attendence='$val' where login='$l'");
							break;
						case 'plan':
							$val = serialize($this->plan);

							$this->db->exec("update users set plan='$val' where login='$l'");
							break;
						case 'subjects':
							$val = serialize($this->subjects);
							$this->db->exec("update users set subjects='$val' where login='$l' ");
							break;

						default:
							# code...
							break;
					}
				}
				else
				{
							$val = serialize($this->attendence);						
							$this->db->exec("update users set attendence='$val' where login='$l'");
							$val = serialize($this->plan);
							$this->db->exec("update users set plan='$val' where login='$l'");
							$val = serialize($this->subjects);

							$this->db->exec("update users set subjects='$val' where login='$l' ");
				}
		}
	}
	public function createPlan($day)
	{
		if($this->auth())
		{	
			$this->plan->clearDay($day);
			if(isset($_POST['1']))
			{
				var_dump($_POST['1']);
				$this->plan->add($day,$_POST['1'],0);
				$this->updateDB('plan');
			}
			if(isset($_POST['2']))
			{
				$this->plan->add($day,$_POST['2'],1);
			}
			if(isset($_POST['3']))
			{
				$this->plan->add($day,$_POST['3'],2);
			}
			if(isset($_POST['4']))
			{
				$this->plan->add($day,$_POST['4'],3);
			}
			if(isset($_POST['5']))
			{
				$this->plan->add($day,$_POST['5'],4);
			}
			if(isset($_POST['6']))
			{
				$this->plan->add($day,$_POST['6'],5);
			}
			if(isset($_POST['7']))
			{
				$this->plan->add($day,$_POST['7'],6);
			}
			if(isset($_POST['8']))
			{
				$this->plan->add($day,$_POST['8'],7);
			}
			if(isset($_POST['9']))
			{
				$this->plan->add($day,$_POST['9'],8);
			}
			if(isset($_POST['10']))
			{
				$this->plan->add($day,$_POST['10'],9);
			}
			
			
			
			
			$this->updateDB('plan');
		}
	}

	public function getPlan()
	{
		if($_SESSION['auth'])
		{
			return $this->plan->getPlan(); 

		}
	}

	public function addAbsent($subject,$date)
	{
		if(isset($subject) and isset($date))
		{
			if($_SESSION['auth'])
			{
				$this->attendence->addAbsent($subject,$date);
				$this->updateDB('attendence');


			}
		}
	}

	public function getAllAbsent()
	{
		if($this->auth())
		{
			$all = $this->attendence->getAllAttendence();
			return $all;

		}
	}

	public function getAbsentBySubject($subject)
	{
		if($_SESSION['auth'])
		{
			if(!empty($subject))
			{
				$absent_array = $this->attendence->getAbsentBySubject($subject);
				return $absent_array;
			}
		}
	}
}
