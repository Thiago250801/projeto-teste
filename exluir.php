<?php

require_once 'controllers/MensagemController.php';
require_once 'helpers/Flash.php';

$id = $_GET['id'];

$controller = new MensagemController();

$controller->excluir($id);

Flash::set('success', 'Mensagem excluída com sucesso!');

header("Location: index.php");
exit;