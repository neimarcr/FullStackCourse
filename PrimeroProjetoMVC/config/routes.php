<?php

/**
*
* Definição das rotas e seus respectivos controllers e actions
*
* @author Code Universe
*
**/

// rotas normais
$commonRoutes = array(
	'/'   			 	 => 'HomeController/index',
	'contato'  		 	 => 'ContatoController/index',
	'usuario'  		 	 => 'UsuarioController/index',
	'login'			 	 => 'LoginController/index',
	'sair'			 	 => 'LoginController/sair',
	'dashboard'		 	 => 'DashboardController/index',
	'tarefas'		 	 => 'TarefasController/index',
	'tarefas/adicionar'	 => 'TarefasController/adicionar',
	'tarefas/editar' 	 => 'TarefasController/editar',

);

// rotas POST
$commonPost = array(
	'enviar/contato' 	=> "ContatoSubmit/enviar",
	'enviar/usuario' 	=> "UsuarioSubmit/enviar",
	'verificar/login' 	=> "LoginController/verificarLogin",
	'enviar/tarefa'		=> "TarefasSubmit/enviar",
	'delete/tarefa'		=> "TarefasSubmit/delete",
);

$commonRoutes = array_merge($commonRoutes, $commonPost);

return $commonRoutes;