<?php
/**
 *
 * Modelo de dados dos contatos.
 *
 * @author Wagner Luz
 *
 **/
class TerefasData
{

	private $pdoQuery;


	function __construct(){

		$this->pdoQuery = new PDOQuery;
	}

	public function listar($usuario_id){

		$sql = "SELECT * FROM tarefas WHERE usuario_id = '$usuario_id'";

		return $this->pdoQuery->fetchAll($sql);

	}

	public function getData($id){		

		return $this->pdoQuery->fetch("SELECT * FROM tarefas WHERE id = '$id' LIMIT 1");

	}

}