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

    public function getQuiz(int $idQuiz)
    {
        $sql = "SELECT * FROM quizzes WHERE idquizzes = :id_quizzes";

        return $this->pdoQuery->fetch($sql, [
            ":id_quizzes" => $idQuiz
        ]);
    }
    
    public function getPerguntasFromIdQuiz(int $id)
    {
        $sql = "SELECT * FROM perguntas WHERE idquizzes = :id";

        return $this->pdoQuery->fetchAll($sql, [
            ":id" => $id
        ]);
    }

    public function getAlternativasFromIdPergunta(int $id)
    {
        $sql = "SELECT * FROM alternativas WHERE idperguntas = :id";

        return $this->pdoQuery->fetchAll($sql, [
            ":id" => $id
        ]);
    }

}
