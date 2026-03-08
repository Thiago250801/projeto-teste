<?php

require_once 'controllers/MensagemController.php';

$controller = new MensagemController();

$mensagens = $controller->listar();

?>

<?php require 'views/header.php'; ?>

<div class="row m-3">

<div class="col-lg-4">

<div class="card shadow-sm mb-4">

<div class="card-body">

<h5 class="card-title mb-3">Nova Mensagem</h5>

<form action="salvar.php" method="POST">

<input type="text" name="nome" placeholder="Nome"
class="form-control mb-3" required>

<input type="email" name="email" placeholder="Email"
class="form-control mb-3" required>

<textarea name="mensagem"
placeholder="Mensagem"
class="form-control mb-3"
rows="4"
required></textarea>

<button class="btn btn-primary w-100">

Enviar Mensagem

</button>

</form>

</div>

</div>

</div>

<div class="col-lg-8">

<div class="card shadow-sm">

<div class="card-body">

<h5 class="card-title mb-3">

Mensagens Recebidas

</h5>

<table class="table table-hover align-middle">

<thead>

<tr>

<th>ID</th>
<th>Nome</th>
<th>Email</th>
<th>Ações</th>

</tr>

</thead>

<tbody>

<?php while($row = $mensagens->fetch(PDO::FETCH_ASSOC)): ?>

<tr>

<td><?= $row['id'] ?></td>

<td><?= htmlspecialchars($row['nome']) ?></td>

<td><?= htmlspecialchars($row['email']) ?></td>

<td class="d-flex gap-2">

<a href="index.php?page=visualizar&id=<?= $row['id'] ?>"
class="btn btn-sm btn-info">

👁

</a>

<a href="index.php?page=editar&id=<?= $row['id'] ?>"
class="btn btn-sm btn-warning">

✏

</a>

<a href="excluir.php?id=<?= $row['id'] ?>"
class="btn btn-sm btn-danger"
onclick="return confirm('Excluir mensagem?')">

🗑

</a>

</td>

</tr>

<?php endwhile; ?>

</tbody>

</table>

</div>

</div>

</div>

</div>

<?php require 'views/footer.php'; ?>
