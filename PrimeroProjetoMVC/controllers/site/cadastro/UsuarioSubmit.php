<?php

class UsuarioSubmit extends Controller{

    public function enviar(){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = sha1($_POST["senha"]);
        $nivel = $_POST["nivel"];

        //Regra de negócio

        $usuarioCrud = new CadastroCrud;
        $usuario_id = $usuarioCrud->save($nome, $email, $senha, $nivel);

        echo json_encode(array(
            'resultado' => true,
            'id' => $usuario_id,
            'msg' => "Usuário cadastrado com sucesso",
            'status' => "success"
        ));
    }
}