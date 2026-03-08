<?php

require_once 'controllers/MensagemController.php';
require_once 'helpers/Flash.php';

$controller = new MensagemController();

$controller->atualizar($_POST);

Flash::set('success', 'Mensagem atualizada com sucesso!');

header("Location: index.php");
exit;