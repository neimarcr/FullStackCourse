<?php


class JogarQuizController extends Controller{

    public function index()
    {
        if($this->userSession->has()){

            $url = $_SERVER['REQUEST_URI'];

            $url_components = parse_url($url, PHP_URL_QUERY);

            parse_str($url_components, $id_query);

            $this->dados->id_quiz = $id_query['id'];

			$this->setLayout('sistema/shared/layout.php');
			$this->view('sistema/jogar_quiz/index.php');

		}else{

			$this->setLayout('site/shared/layout.php');
			$this->view('site/error/index.php');

		}
    }
}