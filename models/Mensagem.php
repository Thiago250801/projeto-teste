<?php

class Mensagem {

    private $conn;
    private $table = "mensagens";

    public function __construct($db){

        $this->conn = $db;

    }

    public function criar($nome,$email,$mensagem){

        $sql = "INSERT INTO ".$this->table."
        (nome,email,mensagem)
        VALUES (:nome,:email,:mensagem)";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(":nome",$nome);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":mensagem",$mensagem);

        return $stmt->execute();

    }

    public function listar(){

        $sql = "SELECT * FROM ".$this->table." ORDER BY id DESC";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        return $stmt;

    }

    public function buscar($id){

        $sql = "SELECT * FROM ".$this->table." WHERE id = :id";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(":id",$id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);

    }

    public function atualizar($id,$nome,$email,$mensagem){

        $sql = "UPDATE ".$this->table."
        SET nome=:nome,email=:email,mensagem=:mensagem,
        data_atualizacao=NOW()
        WHERE id=:id";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(":id",$id);
        $stmt->bindParam(":nome",$nome);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":mensagem",$mensagem);

        return $stmt->execute();

    }

    public function excluir($id){

        $sql = "DELETE FROM ".$this->table." WHERE id = :id";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(":id",$id);

        return $stmt->execute();

    }

}