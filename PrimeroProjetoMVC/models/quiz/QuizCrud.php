<?php

class QuizCrud  {

    private $pdoCrud;
    private $pdoQuery;

    public function __construct()
    {
        $this->pdoCrud = new PDOCrud();
        $this->pdoQuery = new PDOQuery();
    }

    public function save(array $quizzes, int $idusuarios)
    {

        $titulo = $quizzes['titulo'];

        $perguntas = $quizzes['perguntas'];

        $this->pdoCrud->pdo->beginTransaction();

        $idTitulo = $this->salvarTitulo($titulo, $idusuarios);

        if (isset($idTitulo)){



            foreach($perguntas as $index => $pergunta){
                // var_dump($pergunta);
                $idPergunta = $this->salvarPergunta($pergunta['pergunta'], $idTitulo);
                $resposta = $pergunta['correta'];
                if (isset($idPergunta)){
                    try {
                        $this->salvarAlternativa($pergunta['alternativa1'], (int)$idPergunta, $resposta == 'alternativa1' ? 1 : 0);
                        $this->salvarAlternativa($pergunta['alternativa2'], (int)$idPergunta, $resposta == 'alternativa2' ? 1 : 0);
                        $this->salvarAlternativa($pergunta['alternativa3'], (int)$idPergunta, $resposta == 'alternativa3' ? 1 : 0);
                        $this->salvarAlternativa($pergunta['alternativa4'], (int)$idPergunta, $resposta == 'alternativa4' ? 1 : 0);
                        $this->salvarAlternativa($pergunta['alternativa5'], (int)$idPergunta, $resposta == 'alternativa5' ? 1 : 0);

                    }
                    catch (Throwable $e) {
                        $this->pdoCrud->pdo->rollBack();
                        return $e;
                    }
                }
            }
            $this->pdoCrud->pdo->commit();
            return true;
        }

    }

    public function salvarResposta()
    {
        # code...
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

        $colunas = "descricao, idperguntas, correta";
        $valores = ":descricao, :idpergunta, :correta";

        return $this->pdoCrud->insert("alternativas", $colunas, $valores, $pdo);
    }

    public function deletarQuiz($id)
    {
        return $this->pdoCrud->delete("quizzes", "idquizzes", $id);
    }
}