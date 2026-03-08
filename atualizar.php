<?php

require_once 'controllers/MensagemController.php';

$controller = new MensagemController();

$controller->atualizar($_POST);

header("Location: index.php");