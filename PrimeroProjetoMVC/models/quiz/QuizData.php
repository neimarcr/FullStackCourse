<?php

class QuizData
{
    private $pdoQuery;

    function __construct(){
        $this->pdoQuery = new PDOQuery;
    }


    public function listar()
    {
        $sql = "SELECT * FROM quizzes";

        return $this->pdoQuery->fetchAll($sql);
    }

}
