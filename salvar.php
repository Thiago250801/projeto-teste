<?php

require_once 'controllers/MensagemController.php';

$controller = new MensagemController();

$controller->salvar($_POST);

header("Location: index.php");