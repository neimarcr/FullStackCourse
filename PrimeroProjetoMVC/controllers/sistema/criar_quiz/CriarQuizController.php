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

			$idUsuario = $this->userSession->get('id');

			$quizCrud = new QuizCrud();

			$resposta = $quizCrud->save($quiz, $idUsuario);

			if ($resposta === true){
			return json_encode([
				"resposta" => $resposta
			]);
			} else {
				return json_encode([
					"resposta" => false,
					"erro" => $resposta->getMessage(),
				]);
			}

		}else{

			$this->setLayout('site/shared/layout.php');
			$this->view('site/error/index.php');

		}
	}

	public function deletarQuiz()
	{
		$dados = json_decode($_POST['dados'], true);

		var_dump($dados);

		$id_quiz = $dados['id_quiz'];

		$quizCrud = new QuizCrud();

		$quizCrud->deletarQuiz($id_quiz);
	}

}