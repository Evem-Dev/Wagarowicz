<?php

require 'lib/timetable.iface.php';

class TimeTable implements iTimetable
{

	private $pn;
	private $wt;
	private $sr;
	private $cz;
	private $pt;

	public function __construct()
	{


	}


	public function add($day,$name,$id)
	{
		if(!empty($day) and !empty($name) and isset($id))
		{
			$this->{$day}[$id] = $name;
			
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


	public function getDay($day)
	{
		if(!empty($day))
		{
			switch ($day) 
				{
					case 'pn':
						return $this->pn;
						break;
						case 'wt':
							return $this->wt;
							break;
							case 'sr':
								return $this->sr;
								break;
								case 'cz':
									return $this->cz;
									break;
									case 'pt':
										return $this->pt;
										break;
					
					default:
						return "DAY_NOT_EXISTS";
						break;
				}
		}
	}

	public function getPlan()
	{
		return array("pn" => $this->pn,
					 "wt" => $this->wt,
					 "sr" => $this->sr,
					 "cz" => $this->cz,
					 "pt" => $this->pt,
			);
	}


}


?>