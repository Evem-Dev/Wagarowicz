<?php

interface timetable
{
	

	public function addNextLesson($day,$name);
	public function clearDay($day);
	public function clearAllTable();
	public function update($day,$id,$name);

}