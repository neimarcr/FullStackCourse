<?php

/**
*
* Controller do criar-quiz.
*
* 
*
**/
class CriarQuizController extends Controller
{

	public function index()
	{		

		if($this->userSession->has()){

			$this->setLayout('sistema/shared/layout.php');
			$this->view('sistema/criar_quiz/index.php');

		}else{

			$this->setLayout('site/shared/layout.php');
			$this->view('site/error/index.php');

		}
		

	}

	public function criarQuiz()
	{
		if($this->userSession->has()){

			$quiz = json_decode($_POST['dados'], true);

			var_dump($quiz);

			$this->userSession->get('id');

			

		}else{

			$this->setLayout('site/shared/layout.php');
			$this->view('site/error/index.php');

		}
	}

}