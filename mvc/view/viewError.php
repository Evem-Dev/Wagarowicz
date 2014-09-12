<?php


class viewError extends View 
{
		private $model;

				public function __construct()
				{

				}


				public function badurl()
				{
					$this->render('Error/BadUrl');

				}

				public function techbreak()
				{
					$this->render('Error/TechBreak');

				}

				
}

?>