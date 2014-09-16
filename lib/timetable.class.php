<?php

require 'lib/timetable.iface.php';

class TimeTable implements timetable
{

	private $pn;
	private $wt;
	private $sr;
	private $cz;
	private $pt;

	public function __construct()
	{


	}


	public function addNextLesson($day,$name)
	{
		if(!empty($day) and !empty($name))
		{
			switch ($day) {
				case 'pn':
					array_push($this->pn,$name);
					break;
					case 'wt':
						array_push($this->wt,$name);
						break;
						case 'sr':
							array_push($this->sr,$name);
							break;
							case 'cz':
								array_push($this->cz,$name);
								break;
								case 'pt':
									array_push($this->pt,$name);
									break;
				
				default:
					return "DAY_NOT_EXISTS";
					break;
			}
		}



	}

	public function clearDay($day)
	{
		if(!empty($day))
		{
			if(!empty($day) and !empty($name))
			{
				switch ($day) 
				{
					case 'pn':
						$this->pn = array();
						break;
						case 'wt':
							$this->wt = array();
							break;
							case 'sr':
								$this->sr = array();
								break;
								case 'cz':
									$this->cz = array();
									break;
									case 'pt':
										$this->pt = array();
										break;
					
					default:
						return "DAY_NOT_EXISTS";
						break;
				}
			}
		}
	}


	public function clearAllTable()
	{
		$this->pn = array();
		$this->wt = array();
		$this->sr = array();
		$this->cz = array();
		$this->pt = array();

	}


	public function update($day,$id,$name)
	{
		if(!empty($day) and !empty($name) and !empty($id))
		{
				switch ($day) 
				{
					case 'pn':
						$this->pn[$id] = $name;
						break;
						case 'wt':
							$this->wt[$id] = $name;
							break;
							case 'sr':
								$this->sr[$id] = $name;
								break;
								case 'cz':
									$this->cz[$id] = $name;
									break;
									case 'pt':
										$this->pt[$id] = $name;
										break;
					
					default:
						return "DAY_NOT_EXISTS";
						break;
				}
		}
	}

}


?>