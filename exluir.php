<?php

require_once 'controllers/MensagemController.php';

$controller = new MensagemController();

$id = $_GET['id'];

$controller->excluir($id);

header("Location: index.php");