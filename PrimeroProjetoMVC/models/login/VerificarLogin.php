<?php

class VerificarLogin 
{
    private $pdoQuery;
    private $userSession;

    function __construct()
    {
        $this->pdoQuery = new PDOQuery;
        $this->userSession = new UserSession;
    }

    public function verificar($email, $senha)
    {
        $senha = sha1($senha);

        $data = $this->pdoQuery->fetch("SELECT * FROM usuarios WHERE email = :email AND senha = :senha LIMIT 1", [
            ":email" => $email,
            ":senha" => $senha,
        ]);


        
        if (is_array($data) && count($data) > 0){

            $this->userSession->saveUser(array(
                'id' => $data['idusuarios'],
                'nome'       => $data['nome'],
                'email'      => $data['email'],
                'senha'      => $data['senha'],
            ));

            return true;
            
        } else {

            return false;

        }
    }
}