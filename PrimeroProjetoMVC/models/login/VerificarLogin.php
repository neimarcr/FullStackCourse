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

        $data = $this->pdoQuery->fetchAll("SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha' LIMIT 1");

        if (count($data) > 0){

            $this->userSession->saveUser(array(
                'usuario_id' => $data[0]['usuario_id'],
                'nome'       => $data[0]['nome'],
                'email'      => $data[0]['email'],
                'senha'      => $data[0]['senha'],
            ));

            return true;
            
        } else {

            return false;

        }
    }
}