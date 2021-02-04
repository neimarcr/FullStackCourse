<?php

class QuizCrud  {

    private $pdoCrud;
    private $pdoQuery;

    public function __construct()
    {
        $this->pdoCrud = new PDOCrud();
        $this->pdoQuery = new PDOQuery();
    }

    public function save(string $titulo, int $idusuarios, array $perguntas, array $alternativas)
    {
        $idTitulo = $this->salvarTitulo($titulo, $idusuarios);

        if (isset($idTitulo)){

            foreach($perguntas as $pergunta){
                $idPergunta = $this->salvarPergunta($pergunta, $idTitulo);
                if (isset($idPergunta)){

                    foreach($alternativas as $alternativa => $resposta){
                        $this->salvarAlternativa($alternativa, (int)$idPergunta, (int)$resposta);
                    }
                }
            }
        }
    }


    private function salvarTitulo(string $titulo, int $idusuarios)
    {
        $pdo = [
            ':titulo' => $titulo,
            ':idusuarios' => $idusuarios,
        ];

        $colunas = "titulo, idusuarios";
        $valores = ":titulo, :idusuarios";

        return $this->pdoCrud->insert("quizzes", $colunas, $valores, $pdo);
    }

    private function salvarPergunta(string $titulo, int $idquizzes)
    {
        $pdo = [
            ':titulo' => $titulo,
            ':idquizzes' => $idquizzes,
        ];

        $colunas = "titulo, idquizzes";
        $valores = ":titulo, :idquizzes ";

        return $this->pdoCrud->insert("perguntas", $colunas, $valores, $pdo);
    }

    private function salvarAlternativa(string $descricao, int $idpergunta, int $correta)
    {
        $pdo = [
            ':descricao' => $descricao,
            ':idpergunta' => $idpergunta,
            ':correta' => $correta,
        ];

        $colunas = "descricao, idpergunta, correta";
        $valores = ":descricao, :idpergunta, :correta";

        return $this->pdoCrud->insert("alternativas", $colunas, $valores, $pdo);
    }


}