<?php

class Attendence 
{
	private $adate;
	private $subject;

	public function addAbsent($subject,$adate)
	{
		if(!empty($subject) and !empty($adate))
		{
			array_push($this->adate,$adate);
			array_push($this->subject,$subject);
		}
	}

	public function getAbsentBySubject($subject)
	{
		if(!empty($subject))
		{
			$ret = array();
			$sz = sizeof($this->subject);
			for($i=0;$i<$sz;$i++)
			{
				if($this->subject[$i] == $subject)
				{
					array_push($ret,$this->adate[$i]);

				}
			}
			return $ret;
		}
	}

	public function getAbsentDays()
	{
		return $this->adate;
	}

	public function getAllAttendence()
	{
		return array('subjects' => $this->subject,'adate'=>$this->adate);
	}

}



?>