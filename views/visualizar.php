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

  <div class="detail-card">

    <div class="detail-header">
      <div class="detail-avatar">
        <i class="bi bi-person-fill"></i>
      </div>
      <h2><?= htmlspecialchars($mensagem['nome']) ?></h2>
      <p><i class="bi bi-envelope me-1"></i><?= htmlspecialchars($mensagem['email']) ?></p>
    </div>

    <div class="detail-body">

      <div class="detail-field">
        <label>
          <i class="bi bi-hash"></i> ID do Registro
        </label>
        <p><span class="badge-id">#<?= $mensagem['id'] ?></span></p>
      </div>

      <div class="detail-field">
        <label>
          <i class="bi bi-person-fill"></i> Nome
        </label>
        <p><?= htmlspecialchars($mensagem['nome']) ?></p>
      </div>

      <div class="detail-field">
        <label>
          <i class="bi bi-envelope-fill"></i> E-mail
        </label>
        <p>
          <a href="mailto:<?= htmlspecialchars($mensagem['email']) ?>"
             style="color:var(--primary); text-decoration:none;">
            <?= htmlspecialchars($mensagem['email']) ?>
          </a>
        </p>
      </div>

      <div class="detail-field">
        <label>
          <i class="bi bi-chat-text-fill"></i> Mensagem
        </label>
        <p style="white-space: pre-wrap;"><?= htmlspecialchars($mensagem['mensagem']) ?></p>
      </div>

      <?php if (!empty($mensagem['data_criacao'])): ?>
      <div class="detail-field">
        <label>
          <i class="bi bi-clock-fill"></i> Recebida em
        </label>
        <p><?= date('d/m/Y \à\s H:i', strtotime($mensagem['data_criacao'])) ?></p>
      </div>
      <?php endif; ?>

      <div class="d-flex gap-2 mt-3">
        <a href="index.php?page=editar&id=<?= $mensagem['id'] ?>"
           class="btn btn-warning">
          <i class="bi bi-pencil-fill"></i> Editar
        </a>
        <a href="excluir.php?id=<?= $mensagem['id'] ?>"
           class="btn btn-danger"
           onclick="return confirm('Deseja excluir esta mensagem?')">
          <i class="bi bi-trash3-fill"></i> Excluir
        </a>
      </div>

    </div>
  </div>

</div>

<?php require 'views/footer.php'; ?>