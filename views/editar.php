<?php

require_once 'controllers/MensagemController.php';

$controller = new MensagemController();
$mensagem   = $controller->buscar($_GET['id']);

?>

<?php require 'views/header.php'; ?>

<div class="page-wrapper" style="max-width:680px;">

  <div class="mb-3">
    <a href="index.php" class="btn btn-outline-secondary btn-sm">
      <i class="bi bi-arrow-left"></i> Voltar
    </a>
  </div>

  <div class="edit-card">

    <div class="edit-header">
      <h3><i class="bi bi-pencil-square me-2"></i>Editar Mensagem</h3>
      <p>Atualize os dados do registro <strong>#<?= $mensagem['id'] ?></strong></p>
    </div>

    <div class="edit-body">
      <form action="atualizar.php" method="POST">

        <input type="hidden" name="id" value="<?= $mensagem['id'] ?>">

        <div class="mb-3">
          <label class="form-label">
            <i class="bi bi-person-fill"></i> Nome
          </label>
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
            <input type="text" name="nome"
                   value="<?= htmlspecialchars($mensagem['nome']) ?>"
                   class="form-control" required>
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">
            <i class="bi bi-envelope-fill"></i> E-mail
          </label>
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
            <input type="email" name="email"
                   value="<?= htmlspecialchars($mensagem['email']) ?>"
                   class="form-control" required>
          </div>
        </div>

        <div class="mb-4">
          <label class="form-label">
            <i class="bi bi-chat-text-fill"></i> Mensagem
          </label>
          <textarea name="mensagem" class="form-control" rows="5" required><?= htmlspecialchars($mensagem['mensagem']) ?></textarea>
        </div>

        <div class="d-flex gap-2">
          <button type="submit" class="btn btn-success">
            <i class="bi bi-floppy-fill"></i> Salvar Alterações
          </button>
          <a href="index.php" class="btn btn-outline-secondary">
            <i class="bi bi-x-lg"></i> Cancelar
          </a>
        </div>

      </form>
    </div>

  </div>

</div>

<?php require 'views/footer.php'; ?>