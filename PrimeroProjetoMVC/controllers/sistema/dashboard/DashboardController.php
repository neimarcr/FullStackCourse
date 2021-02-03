<?php

/**
*
* Controller do dashboard.
*
* 
*
**/
class DashboardController extends Controller
{

	// public function __construct(array $helpers = array())
	// {
	// 	parent::__construct($helpers);
		
	// }


	public function index()
	{		


		if($this->userSession->has()){

			$quiz = new QuizData();

			$user_quizzes = $quiz->listar($this->userSession->get("id"));

			$this->setLayout('sistema/shared/layout.php');
			$this->view('sistema/dashboard/index.php', $user_quizzes);

		}else{

			$this->setLayout('site/shared/layout.php');
			$this->view('site/error/index.phtml');

		}
		

	}

}