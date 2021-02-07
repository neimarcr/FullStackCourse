<?php

/**
*
* Definição das rotas e seus respectivos controllers e actions
*
* 
*
**/

// rotas normais
$commonRoutes = array(
	'/'   			=> 'LoginController/index',
	'cadastro' 	 	=> 'CadastroController/index',
	'login'			=> 'LoginController/index',
	'sair'			=> 'LoginController/sair',
	'dashboard' 	=> 'DashboardController/index',
	'jogar_quiz'	=> 'JogarQuizController/index'
);

// rotas POST
$commonPost = array(
	'enviar/usuario' 	=> "UsuarioSubmit/enviar",
	'verificar/login' 	=> "LoginController/verificarLogin",
	'salvar/quiz'  		=> "CriarQuizController/criarQuiz",
	'criar_quiz'		=> 'CriarQuizController/index',
	'deletar/quiz'		=> "CriarQuizController/deletarQuiz"
);

$commonRoutes = array_merge($commonRoutes, $commonPost);

return $commonRoutes;