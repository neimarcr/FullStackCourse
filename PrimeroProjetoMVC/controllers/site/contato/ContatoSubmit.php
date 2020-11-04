<?php 

class ContatoSubmit extends Controller{

    public function enviar(){

        $nome = $_POST["nome"];
        $emai = $_POST["email"];
        $fone = $_POST["fone"];
        $mensagem = $_POST["mensagem"];
    

    //Regra de negócio

        echo json_encode(array(
            'resultado' => true,
            'id' => 1,
            'data' => $_POST,
            'msg' => "Entraremos em contato assim que possível",
            'status' => "success"
        ));
    }

}