<?php

require_once 'controllers/MensagemController.php';

$controller = new MensagemController();

$mensagens = $controller->listar();

?>

<!DOCTYPE html>

<html>

<head>

<title>Contato</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<h2>Contato</h2>

<form action="salvar.php" method="POST" class="card p-4 mb-4">

<input type="text" name="nome" placeholder="Nome" class="form-control mb-2" required>

<input type="email" name="email" placeholder="Email" class="form-control mb-2" required>

<textarea name="mensagem" class="form-control mb-2" required></textarea>

<button class="btn btn-primary">Enviar</button>

</form>

<table class="table table-striped">

<tr>
<th>ID</th>
<th>Nome</th>
<th>Email</th>
<th>Mensagem</th>
<th>Ação</th>
</tr>

<?php while($row = $mensagens->fetch(PDO::FETCH_ASSOC)): ?>

<tr>

<td><?= $row['id'] ?></td>
<td><?= htmlspecialchars($row['nome']) ?></td>
<td><?= htmlspecialchars($row['email']) ?></td>
<td><?= htmlspecialchars($row['mensagem']) ?></td>

<td>

<a href="excluir.php?id=<?= $row['id'] ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Excluir?')">

Excluir

</a>

</td>

</tr>

<?php endwhile; ?>

</table>

</div>

</body>

</html>