<?php

/**
*
* Controller do dashboard.
*
* @author Code Universe
*
**/
class TarefasSubmit extends Controller
{

	public function index()
	{		

		if($this->userSession->get("usuario_id")){

			$this->setLayout('sistema/shared/layout.php');
			$this->view('sistema/dashboard/index.php');

		}else{

			$this->setLayout('site/shared/layout.php');
			$this->view('site/error/index.php');

		}
		

	}

}