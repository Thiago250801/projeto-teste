<?php

require_once 'controllers/MensagemController.php';

$controller = new MensagemController();

$mensagem = $controller->buscar($_GET['id']);

?>

<?php require 'views/header.php'; ?>

<div class="container mt-5">

<h3>Mensagem</h3>

<div class="card p-4">

<p><strong>Nome:</strong> <?= htmlspecialchars($mensagem['nome']) ?></p>

<p><strong>Email:</strong> <?= htmlspecialchars($mensagem['email']) ?></p>

<p><strong>Mensagem:</strong></p>

<p><?= htmlspecialchars($mensagem['mensagem']) ?></p>

</div>

</div>