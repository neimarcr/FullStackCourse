<?php

/**
*
* Controller do dashboard.
*
* @author Code Universe
*
**/
class DashboardController extends Controller
{

	public function __construct(array $helpers = array())
	{
		parent::__construct($helpers);
		
	}


	public function index()
	{		


		if($this->userSession->has()){

			$this->setLayout('sistema/shared/layout.php');
			$this->view('sistema/dashboard/index.php');

		}else{

			$this->setLayout('site/shared/layout.php');
			$this->view('site/error/index.php');

		}
		

	}

}