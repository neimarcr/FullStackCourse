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
	'cadastro'  => 'CadastroController/index',
	'login'		=> 'LoginController/index',
);

// rotas POST
$commonPost = array(
	'enviar/contato' => "ContatoSubmit/enviar",
	'enviar/usuario' => "UsuarioSubmit/enviar"
);

$commonRoutes = array_merge($commonRoutes, $commonPost);

return $commonRoutes;