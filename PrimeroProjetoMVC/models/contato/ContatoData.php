<?php

class ContatoData
{
    private $pdoQuery;

    function __construct()
    {
        $this->pdoQuery = new PDOQuery;
    }

    public function listar()
    {
        $sql = "SELECT * FROM contato";

        return $this->pdoQuery->fetchAll($sql);
    }

    public function getContato($id)
    {
        $pdo = array(
            ":contato_id" => $id
        );

        $sql = "SELECT * FROM contato WHERE contato_id = :contato_id";

        return $this->pdoQuery->fetch($sql, $pdo);
    }
}