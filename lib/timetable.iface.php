<?php

interface timetable
{
	private $pn;
	private $wt;
	private $sr;
	private $cz;
	private $pt;

	public function addNextLesson($day,$name);
	public function clearDay($day);
	public function clearAllTable();
	public function update($day,$id,$name);

}