<?php

/**
*
* Controller que pode ser extendido por outros
* controllers para fornecer funcionalidades comuns.
*
* @author Code Universe
*
**/
abstract class Controller
{

	private $layout;
	protected $helpers;
	protected $userSession;
	protected $dados;
	protected $quizData;

	public function __construct(array $helpers = array())
	{
		$this->dados = new stdClass();
		$this->helpers = $helpers;
		$this->userSession = new UserSession();
		$this->quizData = new QuizData();
	}

	protected function setLayout($filename)
	{

		$this->layout = $filename;

	}

	protected function getQuizzes()
	{

		$this->dados->quizzes = $this->quizData->listar();
	}

	protected function view($filename, array $data = array())
	{

		$path = ROOT . '/views/';
		$file = $path . $filename;

		extract($data);

		if(!is_null($this->layout)){
			return require $path . $this->layout;
		}

		require $file;

	}

	protected function render($view){

		if($this->userSession->has()){

			$this->getQuizzes();

			$this->setLayout('sistema/shared/layout.php');
			$this->view('sistema/dashboard/index.php');

		}else{

			$this->setLayout('site/shared/layout.php');
			$this->view('site/'.$view.'/index.php');

		}
	}

	protected function getId(array $params)
	{

		$this->helpers['URLControl']->checkId($params, $this->helpers['URLHelper']->getURL('404'));
		$id = (int) $params[0];

		return $id;

	}

}