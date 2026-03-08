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

        return $this->mensagem->criar(
            $dados['nome'],
            $dados['email'],
            $dados['mensagem']
        );

    }

    public function listar(){

        return $this->mensagem->listar();

    }

    public function buscar($id){

        return $this->mensagem->buscar($id);

    }

    public function atualizar($dados){

        return $this->mensagem->atualizar(
            $dados['id'],
            $dados['nome'],
            $dados['email'],
            $dados['mensagem']
        );

    }

    public function excluir($id){

        return $this->mensagem->excluir($id);

    }

}