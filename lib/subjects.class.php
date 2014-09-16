<?php

include 'lib/subjects.iface.php';


class Subjects implements iSubject 
{
	private $subject_list;

	public function __construct($subjects_array)
	{
		$this->subject_list = $subjects_array;
	}

	public function getSubjectById($id)
	{
		return $this->subject_list[$id];
	}

	public function getSubject()
	{
		return $this->subject_list;
		
	}

}

?>