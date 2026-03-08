<?php

require_once 'controllers/MensagemController.php';

$controller = new MensagemController();

$mensagem = $controller->buscar($_GET['id']);

?>

<?php require 'views/header.php'; ?>

<div class="container mt-5">

<h3>Editar Mensagem</h3>

<form action="atualizar.php" method="POST">

<input type="hidden" name="id" value="<?= $mensagem['id'] ?>">

<input type="text" name="nome" value="<?= $mensagem['nome'] ?>" class="form-control mb-2">

<input type="email" name="email" value="<?= $mensagem['email'] ?>" class="form-control mb-2">

<textarea name="mensagem" class="form-control mb-2"><?= $mensagem['mensagem'] ?></textarea>

<button class="btn btn-success">

Atualizar

</button>

</form>

</div>