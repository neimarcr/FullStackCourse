<?php

/**
*
* Controller do site.
*
* @author Neimar Rech
*
**/
class LoginController extends Controller
{

	public function index()
	{	

		$this->setLayout('site/shared/layout.php');
		$this->view('site/login/index.php');

	}

	public function verificarLogin()
	{
		$email = $_POST["email"];
		$senha = $_POST["senha"];

		$verificarLogin = new VerificarLogin;
		$resultado = $verificarLogin->verificar($email, $senha);
		// var_dump($resultado);die;
		echo json_encode(array(
			'resultado' => $resultado,
		));
	}

	public function sair()
	{
		$this->helpers['UserSession']->deleteUser();

		$this->setLayout('site/shared/layout.php');
		$this->view('site/login/index.php');
	}	

}