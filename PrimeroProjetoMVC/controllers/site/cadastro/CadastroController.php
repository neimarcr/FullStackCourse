<?php

/**
*
* Controller do site.
*
* @author Code Universe
*
**/
class CadastroController extends Controller
{

	public function index()
	{	

		$this->setLayout('site/shared/layout.php');
		$this->view('site/cadastro/index.php');

	}

}