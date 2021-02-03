<?php

class QuizData
{
    private $pdoQuery;

    function __constructor(){
        $this->pdoQuery = new PDOQuery;
    }

    public function listar($id)
    {
        $sql = "SELECT * FROM quizzes WHERE id = :id";

        return $this->pdoQuery->fetchAll($sql, [":id" => $id]);
    }

}
