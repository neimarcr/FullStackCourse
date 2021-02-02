<?php

class UsuarioCRUD
{
    private $pdoCrud;

    function __construct(){
        $this->pdoCrud = new PDOCrud;
    }

    public function save($nome, $cpf, $fone, $email, $senha)
    {
        $pdo = array(
            ':nome'     => $nome,
            ':cpf'      => $cpf,
            ':fone'     => $fone,
            ':email'    => $email,
            ':senha'    => sha1($senha),
        );

        $colunas = "nome, cpf, fone, email, senha";
        $valores = ":nome, :cpf, :fone, :email, :senha";

        return $this->pdoCrud->insert("usuario", $colunas, $valores, $pdo);
    }

    public function update($id, $nome, $cpf, $fone, $email, $senha)
    {
        $pdo = array(
            ':usuario_id'   => $id,
            ':nome'         => $nome,
            ':cpf'          => $cpf,
            ':fone'         => $fone,
            ':email'        => $email,
            ':senha'        => $senha,
        );

        $valores = "nome=:nome, cpf=:cpf, fone=:fone, email=:email, senha=:senha";

        $where = "WHERE usuario_id = :usuario_id";

        return $this->pdoCrud->update("usuario", $valores, $where, $pdo);
    }

    public function delete($id)
    {
        return $this->pdoCrud->delete("usuario", $id);
    }
}
