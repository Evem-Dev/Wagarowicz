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
							$this->db->exec("update set plan='$val' where login='$l' ");
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
			$l = $_SESSION['login'];
			$handle = $this->db->query("select * from absent_".$l);
			$subject = array();
			$date = array();
			foreach($handle as $row)
			{

				array_push($subject, $row['subject']);
				array_push($date, $row['adate']);
			}
			return array('subject' => $subject,'date'=>$date);

		}
	}

	public function getAbsentBySubject($subject)
	{
		if($_SESSION['auth'])
		{
			if(!empty($subject))
			{
				$l = $_SESSION['login'];
				$handle = $this->db->query("select COUNT(adate) FROM attend_".$l." where subject='$subject' ");
				$result = $handle->fetch(PDO::FETCH_ROW);
				return $result; //check how to fetch one row by var_dump();
			}
		}
	}
}
