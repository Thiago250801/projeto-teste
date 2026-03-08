<?php

require_once 'config/database.php';
require_once 'models/Mensagem.php';

class MensagemController {

    private $mensagem;

    public function __construct(){

        $database = new Database();
        $db = $database->conectar();

        $this->mensagem = new Mensagem($db);

    }

    public function salvar($dados){

        $this->mensagem->nome = $dados['nome'];
        $this->mensagem->email = $dados['email'];
        $this->mensagem->mensagem = $dados['mensagem'];

        return $this->mensagem->criar();

    }

    public function listar(){

        return $this->mensagem->listar();

    }

    public function excluir($id){

        $this->mensagem->id = $id;

        return $this->mensagem->deletar();

    }

}