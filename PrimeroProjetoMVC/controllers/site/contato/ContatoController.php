<?php

/**
*
* Controller do site.
*
* @author Code Universe
*
**/
class ContatoController extends Controller
{

	public function index()
	{	

		$this->setLayout('site/shared/layout.php');
		$this->view('site/contato/index.php');

	}

}