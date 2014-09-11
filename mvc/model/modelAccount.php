<?php 
class modelAccount extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function auth()
	{
		if(isset($_SESSION['auth']))
		{
			return $_SESSION['auth'];
		}
		else
		{
			return false;
		}
	}

	public function getProfile()
	{
		if($this->auth())
		{


			//code
		}
		else
		{
			header("Location: index.php?request=Error&action=outsession");
		}
	}

	public function login($login,$passwd)
	{	
		if(!empty($login) and !empty($passwd))
		{
			
			$handle = $this->db->query("select passwd from users where login='$login'");
			$result = $handle->fetch(PDO::FETCH_ASSOC);
			
			$passwddb = $result['passwd'];
			echo $passwddb;
			if(md5($passwd) == $passwddb)
			{
				
				$_SESSION['auth'] = true;
				$_SESSION['login'] = $login;
				return true;
			}
			else
			{
				return "PASSWD_NOT_MATCH";
			}

		}else
		{
			return "MISSING_ARGS";
		}
	} 
	public function checkFreeLogin($login)
	{	
		if(!empty($login))
		{
		$handle = $this->db->query("select login from users where login='$login'");
		$result = $handle->fetch(PDO::FETCH_ASSOC);
			if(empty($result['login']))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}

	public function logout()
	{
		if(isset($_SESSION['auth']))
		{
			if($_SESSION['auth'])
			{
				unset($_SESSION['auth']);
				unset($_SESSION['login']);

			}
		}
	}
	public function createAccount($login,$passwd1,$passwd2)
	{
		if(!empty($login)  and !empty($passwd1) and !empty($passwd2))
		{

			if(md5($passwd1) == md5($passwd2))
			{	
				$passwd = md5($passwd1);
				if($this->checkFreeLogin($login))
				{
					
					$this->db->exec("insert into users values('NULL','$login','$passwd')");
					return "BOTH_OK||LOGIN_FREE";
				}
				else
				{
					return "LOGIN_EXISTS";
				}
			}
			else
			{
				return "BOTH_PASSWORDS_NOT_MATCH";
			}
		}
		else
		{
			return "EMPTY_FIELDS";
		}
	}


}