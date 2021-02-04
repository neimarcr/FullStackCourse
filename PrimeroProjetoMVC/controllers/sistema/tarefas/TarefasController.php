<?php

/**
*
* Controller do dashboard.
*
* 
*
**/
class TarefasController extends Controller
{

	public function index()
	{		

		if($this->userSession->get("id")){

			$this->setLayout('sistema/shared/layout.php');
			$this->view('sistema/tarefas/index.php');

		}else{

			$this->setLayout('site/shared/layout.php');
			$this->view('site/error/index.php');

		}
		

	}

	public function adicionar()
	{
		if($this->userSession->get("usuario_id")){

			$this->setLayout('sistema/shared/layout.php');
			$this->view('sistema/tarefas/adicionar.php');

		}else{

			$this->setLayout('site/shared/layout.php');
			$this->view('site/error/index.php');

		}
	}

	public function editar()
	{
		if($this->userSession->get("usuario_id")){

			$this->setLayout('sistema/shared/layout.php');
			$this->view('sistema/tarefas/editar.php');

		}else{

			$this->setLayout('site/shared/layout.php');
			$this->view('site/error/index.php');

		}
	}

}