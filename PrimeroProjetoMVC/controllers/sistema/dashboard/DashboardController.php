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

	public function index()
	{		

		if($this->helpers['UserSession']->get("usuario_id")){

			$this->setLayout('sistema/shared/layout.php');
			$this->view('sistema/dashboard/index.php');

		}else{

			$this->setLayout('site/shared/layout.php');
			$this->view('site/error/index.php');

		}
		

	}

}