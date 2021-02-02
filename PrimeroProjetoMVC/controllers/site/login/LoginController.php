<?php

/**
*
* Controller do site.
*
* @author Code Universe
*
**/
class LoginController extends Controller
{

	public function index()
	{	
		// if ($this->userSession->has()){

		// };
		$this->setLayout('site/shared/layout.php');
		$this->view('site/login/index.php');

	}

	public function verificarLogin()
	{
		$email = $_POST["email"];
		$senha = $_POST["senha"];

		$verificarLogin = new VerificarLogin();
		$resultado = $verificarLogin->verificar($email, $senha);
		
		echo json_encode(array(
			'resultado' => $resultado,
		));
	}

	public function sair()
	{
		$this->userSession->deleteUser();

		$this->setLayout('site/shared/layout.php');
		$this->view('site/login/index.php');
	}	

}