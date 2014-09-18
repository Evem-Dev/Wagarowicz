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
				
				$this->plan->add($day,$_POST['1'],0);
				

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
			
			//Update list of subjects

			$pn = $this->plan->getDay('pn');
			$wt = $this->plan->getDay('wt');
			$sr = $this->plan->getDay('sr');
			$cz = $this->plan->getDay('cz');
			$pt = $this->plan->getDay('pt');

			$list = array();
			$list_ptr = 0;
			$sz = sizeof($pn);
			for($i=0;$i<$sz;$i++)
			{
				$list[$list_ptr] = $pn[$i];
				$list_ptr++;
			}
			$sz = sizeof($wt);
			for($i=0;$i<$sz;$i++)
			{
				$list[$list_ptr] = $wt[$i];
				$list_ptr++;
			}
			$sz = sizeof($sr);
			for($i=0;$i<$sz;$i++)
			{
				$list[$list_ptr] = $sr[$i];
				$list_ptr++;
			}
			$sz = sizeof($cz);
			for($i=0;$i<$sz;$i++)
			{
				$list[$list_ptr] = $cz[$i];
				$list_ptr++;
			}
			$sz = sizeof($pt);
			for($i=0;$i<$sz;$i++)
			{
				$list[$list_ptr] = $pt[$i];
				$list_ptr++;
			}
			$list = array_map('strtolower', $list);
			$list = array_unique($list,SORT_STRING);
			$this->subjects->set($list);

			
			
			



			//eof
			
			$this->updateDB('subjects');
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
