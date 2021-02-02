<?php

class CadastroCrud
{
    private $pdoCrud;

    function __construct(){
        $this->pdoCrud = new PDOCrud;
    }

    public function save($nome, $email, $senha, $nivel)
    {
        $pdo = array(
            ':nome'     => $nome,
            ':email'    => $email,
            ':senha'    => $senha,
            ':nivel'    => $nivel,
        );

        $colunas = "nome, email, senha, nivel";
        $valores = ":nome, :email, :senha, :nivel";

        return $this->pdoCrud->insert("usuarios", $colunas, $valores, $pdo);
    }

    public function update($id, $nome, $cpf, $fone, $email, $senha)
    {
        $pdo = array(
            ':id'       =>$id,
            ':nome'     => $nome,
            ':cpf'      => $cpf,
            ':fone'     => $fone,
            ':email'    => $email,
            ':senha'    => $senha,
        );

        $valores = "id=:id, nome=:nome, cpf=:cpf, fone=:fone, email=:email, senha=:senha";

        $where = "WHERE id = :id";

        return $this->pdoCrud->update("usuario", $valores, $where, $pdo);
    }

    public function delete($id)
    {
        return $this->pdoCrud->delete("usuario", $id);
    }
}
