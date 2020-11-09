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
            ":id" => $id
        );

        $sql = "SELECT * FROM contato WHERE id = :id";

        return $this->pdoQuery->fetch($sql, $pdo);
    }
}