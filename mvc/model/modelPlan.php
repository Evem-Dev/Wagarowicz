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
							$this->db->exec("update set attendence='$val' where login='$l'");
							break;
						case 'plan':
							$val = serialize($this->plan);
							$this->db->exec("update set plan='$val' where login='$l'");
							break;
						case 'subjects':
							$val = serialize($this->subjects);
							$this->db->exec("update set subjects='$val' where login='$l' ");
							break;

						default:
							# code...
							break;
					}
				}
				else
				{
							$val = serialize($this->attendence);						
							$this->db->exec("update set attendence='$val' where login='$l'");
							$val = serialize($this->plan);
							$this->db->exec("update set plan='$val' where login='$l'");
							$val = serialize($this->subjects);
							$this->db->exec("update set plan='$val' where login='$l' ");
				}
		}
	}
	public function createPlan($pn,$wt,$sr,$cz,$pt)
	{
		if($this->auth())
		{	
			$this->plan->clearAllTable();
			$sz = sizeof($pn);
			for($i=0;$i<$sz;$i++)
			{
				$this->plan->addNextLesson('pn',$pn[$i]);
			}

			$sz = sizeof($wt);
			for($i=0;$i<$sz;$i++)
			{
				$this->plan->addNextLesson('wt',$wt[$i]);
			}

			$sz = sizeof($sr);
			for($i=0;$i<$sz;$i++)
			{
				$this->plan->addNextLesson('sr',$sr[$i]);
			}

			$sz = sizeof($cz);
			for($i=0;$i<$sz;$i++)
			{
				$this->plan->addNextLesson('cz',$cz[$i]);
			}

			$sz = sizeof($pt);
			for($i=0;$i<$sz;$i++)
			{
				$this->plan->addNextLesson('pt',$pt[$i]);
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
