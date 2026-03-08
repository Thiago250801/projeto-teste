<?php

class Mensagem {

    private $conn;
    private $table = "mensagens";

    public $id;
    public $nome;
    public $email;
    public $mensagem;

    public function __construct($db){

        $this->conn = $db;

    }

    public function criar(){

        $query = "INSERT INTO ".$this->table."
        (nome,email,mensagem)
        VALUES (:nome,:email,:mensagem)";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nome",$this->nome);
        $stmt->bindParam(":email",$this->email);
        $stmt->bindParam(":mensagem",$this->mensagem);

        return $stmt->execute();

    }

    public function listar(){

        $query = "SELECT * FROM ".$this->table." ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;

    }

    public function deletar(){

        $query = "DELETE FROM ".$this->table." WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id",$this->id);

        return $stmt->execute();

    }

}