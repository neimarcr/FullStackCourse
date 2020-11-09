<?php

class ContatoCrud
{
    private $pdoCrud;

    function __construct(){
        $this->pdoCrud = new PDOCrud;
    }

    public function save($nome, $email, $fone, $mensagem){

        $pdo = array(
            ':nome'     => $name,
            ':email'    => $email,
            ':fone'     => $fone,
            ':mensagem' => $mensagem,
        );

        $colunas = "nome, email, fone, mensagem";
        $valores = ":nome, :email, :fone, :mensagem";

        return $this->pdoCrud->insert("contato", $colunas, $valores, $pdo);

    }

    public function update($id, $nome, $email, $fone, $mensagem){
        $pdo = array(
            ':id'       => $id,
            ':nome'     => $name,
            ':email'    => $email,
            ':fone'     => $fone,
            ':mensagem' => $mensagem,
        );

        $valores = "nome=:nome, email=:email, fone=:fone, mensagem=:mensagem";

        $where = "WHERE id = :id";

        return $this->pdoCrud->update("contato", $valores, $where, $pdo);
    }
    
    public function delete($id)
    {
        return $this->pdoCrud->delete("contato", $id);
    }
}