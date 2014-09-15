<?php

require 'mvc/model/modelAccount.php';
class modelPlan extends modelAccount
{

	

	public function __construct()
	{
		parent::__construct();

	}

	public function createPlan($pn,$wt,$sr,$cz,$pt)
	{
		if($this->auth())
		{
			if(isset($pn) and isset($wt) and isset($sr) and isset($cz) and isset($pt))
			{
				$l = $_SESSION['login'];
				

				$pn = serialize($pn);
				$wt = serialize($wt);
				$sr = serialize($sr);
				$cz = serialize($cz);
				$pt = serialize($pt);
				$this->db->exec("insert into plan_".$l." values('NULL','$pt','$wt','$sr','$cz','$pt')");

			}
		}
	}

	public function getPlan()
	{
		if($this->auth())
		{
			$l = $_SESSION['login'];
			$handle = $this->db->query("select * from plan_".$l." order by id desc LIMIT 1");
			$result = $handle->fetch(PDO::FETCH_ASSOC);
			$pt = unserialize($result['pt']);
			$wt = unserialize($result['wt']);
			$sr = unserialize($result['sr']);
			$cz = unserialize($result['cz']);
			$pn = unserialize($result['pn']);
			return array($pn,$wt,$sr,$cz,$pt);

		}
	}

	public function addAbsent($subject,$date)
	{
		if(isset($subject) and isset($date))
		{
			if($_SESSION['auth'])
			{
				$l = $_SESSION['login'];
				$this->db->exec("insert into attend_".$l." values('NULL','$subject','$date')");

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
				array_push($date, $row['adate'])
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
