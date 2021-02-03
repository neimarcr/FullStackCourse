<?php

/**
*
* Classe que manipula os dados do usuário na sessão.
*
* 
* 
**/
class UserSession
{

	private function control()
	{
		
		if(!isset($_SESSION)){
			
			session_start();

		}

	}

	public function saveUser($data)
	{

		$this->control();
		$_SESSION['User'] = $data;
		return true;
		
	}


	public function has()
	{

		$this->control();

		return isset($_SESSION['User']);
		
	}

	public function get($info)
	{

		$this->control();

		if(isset($_SESSION['User'][$info])){
			return $_SESSION['User'][$info];
		}

	}


	public function setUser($info, $value)
	{

		$this->control();

		$_SESSION['User'][$info] = $value;

	}

	public function deleteUser()
	{

		$this->control();
		unset($_SESSION['User']);

	}

	public function getAlerts(){

		$userData = new UserData;
		$alerts = $userData->getAlertsNonwiewed();

		return $alerts;
	}

}