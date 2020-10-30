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
	'/'   		=> 'HomeController/index',
	'contato'  	=> 'ContatoController/index',
	'registro'  => 'RegistroController/index',
	'login'		=> 'LoginController/index',
);

// rotas POST
$commonPost = array();

$commonRoutes = array_merge($commonRoutes, $commonPost);

return $commonRoutes;