<?php

class UsuarioSubmit extends Controller{

    public function enviar(){
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $fone = $_POST["fone"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        //Regra de negócio

        $usuarioCrud = new UsuarioCRUD;
        $usuario_id = $usuarioCrud->save($nome, $cpf, $fone, $email, $senha);

        echo json_encode(array(
            'resultado' => true,
            'id' => $usuario_id,
            'msg' => "Usuário cadastrado com sucesso",
            'status' => "success"
        ));
    }
}