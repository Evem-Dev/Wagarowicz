<?php


class modelPlan extends Model 
{

	

	public function __construct()
	{
		parent::__construct();

	}

	public function createPlan($pn,$wt,$sr,$cz,$pt)
	{
		if(isset($pn) and isset($wt) and isset($sr) and isset($cz) and isset($pt) and $_SESSION['auth'] == true)
		{
			$l = $_SESSION['login'];
			$this->db->query("create table plan_".$l."(id int auto_increment,pn text,wt text,sr text,cz text,pt text,primary key(id))");

			$pn = serialize($pn);
			$wt = serialize($wt);
			$sr = serialize($sr);
			$cz = serialize($cz);
			$pt = serialize($pt);
			$this->db->exec("insert into plan_".$l." values('NULL','$pt','$wt','$sr','$cz','$pt')");

		}
	}

	
}
