<?php 

class ContatoSubmit extends Controller{

    public function enviar(){

        $nome       = $_POST["nome"];
        $emai       = $_POST["email"];
        $fone       = $_POST["fone"];
        $mensagem   = $_POST["mensagem"];
    

        //Regra de negócio
        $contatoCrud    = new ContatoCrud;
        $contato_id     = $contatoCrud->save($nome, $emai, $fone, $mensagem);

        echo json_encode(array(
            'resultado' => true,
            'id'        => $contato_id,
            'msg'       => "Entraremos em contato assim que possível",
            'status'    => "success"
        ));
        
        
    }

}