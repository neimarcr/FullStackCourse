<?php

/**
*
* Controller do site.
*
* @author Code Universe
*
**/
class RegistroController extends Controller
{

	public function index()
	{	

		$this->setLayout('site/shared/layout.php');
		$this->view('site/registro/index.php');

	}

}