<?php


class JogarQuizController extends Controller{


    public function index()
    {
        if($this->userSession->has()){

            $url = $_SERVER['REQUEST_URI'];
            $url_components = parse_url($url, PHP_URL_QUERY);
            parse_str($url_components, $id_query);

            $this->dados->quiz = $this->quizData->getQuiz((int)$id_query['id']);

            $this->dados->perguntas_quiz = $this->quizData->getPerguntasFromIdQuiz((int)$id_query['id']);

            $this->dados->alternativas = [];
            foreach ($this->dados->perguntas_quiz as $index=>$pergunta){
                $idPergunta = $pergunta['idperguntas'];
                array_push($this->dados->alternativas, $this->quizData->getAlternativasFromIdPergunta((int)$idPergunta));
            }

			$this->setLayout('sistema/shared/layout.php');
			$this->view('sistema/jogar_quiz/index.php');

		}else{

			$this->setLayout('site/shared/layout.php');
			$this->view('site/error/index.php');

		}
    }

    public function enviar()
    {
        var_dump($_POST);
    }
}