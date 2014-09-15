<?php

class Bootstrap {

	public function __construct() {

	}

	public function import($name) {
		if (!empty($name)) {
			$path = 'lib/'.$name.'.php';
			if (is_file($path)) {
				require $path;
			}
		}
	}

	public function iface($name) {
		if (!empty($name)) {
			$path = 'lib/interfaces/'.$name.'.interface.php';
			if (is_file($path)) {
				require $path;
			}
		}
	}

	public function initMVC() {
		require 'mvc/model.php';
		require 'mvc/view.php';
		require 'mvc/controller.php';

	}


	public function stats()
	{
		if (!empty($_SERVER['HTTP_CLIENT_IP']))
		{
    		$ip = $_SERVER['HTTP_CLIENT_IP'];
		} 
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
		{
    		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} 
		else 
		{
    		$ip = $_SERVER['REMOTE_ADDR'];
		}


		$cdate = date("Y-m-d H:i:s");

		
		$db = new Database;
		$db->exec("insert into connection_log values('NULL','$ip','$cdate')");



	}


	public function router() {
		if (isset($_GET['request'])) {

			$cname = 'controller'.$_GET['request'];
			$path  = 'mvc/controller/'.$cname.'.php';
			if (is_file($path)) {
				require $path;
				if (isset($_GET['action'])) {
					return new $cname($_GET['action']);
				} else {
					return new $cname;
				}
			}
			else
			{
				header('Location: index.php?request=Error&action=badurl');

			}
		} else {
			$cname = 'controllerHome';

			$path = 'mvc/controller/'.$cname.'.php';
			if (is_file($path)) {
				require $path;
				if (isset($_GET['action'])) {
					return new $cname($_GET['action']);
				} else {
					return new $cname;
				}
			}
		}

	}

}
?>