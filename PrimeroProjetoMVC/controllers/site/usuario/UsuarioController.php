<?php

/**
*
* Controller do site.
*
* @author Code Universe
*
**/
class UsuarioController extends Controller
{

	public function index()
	{	

		$this->setLayout('site/shared/layout.php');
		$this->view('site/usuario/index.php');

	}

}