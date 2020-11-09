<?php

class UsuarioSubmit extends Controller{

    public function enviar(){
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $fone = $_POST["fone"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        //Regra de negócio

        echo json_encode(array(
            'resultado' => true,
            'id' => 1,
            'data' => $_POST,
            'msg' => "Usuário cadastrado com sucesso",
            'status' => "success"
        ));
    }
}