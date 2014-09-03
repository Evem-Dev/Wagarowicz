<?php


class modelPlan extends Model 
{


	public function __construct()
	{
		parent::__construct();
	}

	public function addattend($subject,$date)
	{
		if($_SESSION['auth'] == true and !empty($date) and !empty($subject))
		{
			$l = $_SESSION['login'];
			$this->db->exec("insert into attend_".$l." values('NULL','$subject','$date')");

		}
	}

	public function setCountSubject($subject,$count)
	{
		if($_SESSION['auth'] == true and !empty($subject) and !empty($count))
		{
			$l = $_SESSION['login'];
			$this->db->exec("insert into subject_count_".$l." values('NULL','$subject','$count')");

		}
	}

	public function addSubject($name)
	{
		if($_SESSION['auth'] == true and !empty($name))
		{
			$l = $_SESSION['login'];
			$this->db->exec("insert into subject_list_".$l." values(id int auto_increment,'$subject','NULL','NULL')");
		}
	}

}