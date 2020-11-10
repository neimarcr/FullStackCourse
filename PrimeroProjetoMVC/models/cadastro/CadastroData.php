<?php

class CadastroData
{
    private $pdoQuery;

    function __constructor(){
        $this->$pdoQuery = new PDOQuery;
    }

    public function listar()
    {
        $sql = "SELECT * FROM usuario";

        return $this->pdoQuery->fetchAll($sql);
    }

    public function getUsuario($id)
    {
        $pdo = array(":id" => $id);

        $sql = "SELECT FROM usuario WHERE id = :id";

        return $this->pdoQuery->fetch($sql, $pdo);
    }
}
