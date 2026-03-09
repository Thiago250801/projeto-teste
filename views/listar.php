<?php

require_once 'controllers/MensagemController.php';

$controller = new MensagemController();
$mensagens  = $controller->listar();
$rows       = $mensagens->fetchAll(PDO::FETCH_ASSOC);

?>

<?php require 'views/header.php'; ?>

<div class="page-wrapper">
  <div class="row g-4">

    <!-- ── Formulário ── -->
    <div class="col-lg-4">
      <div class="card">

        <div class="card-header-custom">
          <span class="icon-badge" style="background:#eef0fd;">
            <i class="bi bi-pencil-square" style="color:var(--primary);"></i>
          </span>
          <h5>Nova Mensagem</h5>
        </div>

        <div class="p-4">
          <form action="salvar.php" method="POST">

            <div class="mb-3">
              <label class="form-label">
                <i class="bi bi-person"></i> Nome
              </label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                <input type="text" name="nome" placeholder="Seu nome completo"
                       class="form-control" required>
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label">
                <i class="bi bi-envelope"></i> E-mail
              </label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                <input type="email" name="email" placeholder="seu@email.com"
                       class="form-control" required>
              </div>
            </div>

            <div class="mb-4">
              <label class="form-label">
                <i class="bi bi-chat-text"></i> Mensagem
              </label>
              <textarea name="mensagem" placeholder="Escreva sua mensagem aqui..."
                        class="form-control" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100 d-flex justify-content-center align-items-center gap-2">
              <i class="bi bi-send-fill"></i>
              <span>Enviar Mensagem</span>
            </button>

          </form>
        </div>

      </div>
    </div>

    <!-- ── Tabela ── -->
    <div class="col-lg-8">
      <div class="card">

        <div class="card-header-custom">
          <span class="icon-badge" style="background:#e0f2fe;">
            <i class="bi bi-inbox-fill" style="color:#0369a1;"></i>
          </span>
          <h5>Mensagens Recebidas</h5>
          <span class="ms-auto badge" style="background:var(--primary-soft);color:var(--primary);font-size:.75rem;font-weight:600;border-radius:99px;padding:.25rem .75rem;">
            <?= count($rows) ?> mensagem<?= count($rows) !== 1 ? 's' : '' ?>
          </span>
        </div>

        <div class="p-3">

          <?php if (empty($rows)): ?>
            <div class="empty-state">
              <i class="bi bi-inbox d-block"></i>
              <p>Nenhuma mensagem ainda.</p>
            </div>

          <?php else: ?>
            <div class="table-responsive">
              <table class="table table-hover mb-0">
                <thead>
                  <tr>
                    <th style="width:60px;">ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th style="width:120px;">Ações</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($rows as $row): ?>
                  <tr>
                    <td>
                      <span class="badge-id">#<?= $row['id'] ?></span>
                    </td>
                    <td>
                      <div class="name-cell">
                        <span class="avatar-cell">
                          <?= strtoupper(mb_substr($row['nome'], 0, 1)) ?>
                        </span>
                        <?= htmlspecialchars($row['nome']) ?>
                      </div>
                    </td>
                    <td style="color:var(--text-muted); font-size:.85rem;">
                      <?= htmlspecialchars($row['email']) ?>
                    </td>
                    <td>
                      <div class="d-flex gap-1">
                        <a href="index.php?page=visualizar&id=<?= $row['id'] ?>"
                           class="btn btn-sm btn-info" title="Visualizar">
                          <i class="bi bi-eye-fill"></i>
                        </a>
                        <a href="index.php?page=editar&id=<?= $row['id'] ?>"
                           class="btn btn-sm btn-warning" title="Editar">
                          <i class="bi bi-pencil-fill"></i>
                        </a>
                        <a href="excluir.php?id=<?= $row['id'] ?>"
                           class="btn btn-sm btn-danger" title="Excluir"
                           onclick="return confirm('Deseja excluir esta mensagem?')">
                          <i class="bi bi-trash3-fill"></i>
                        </a>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          <?php endif; ?>

        </div>
      </div>
    </div>

  </div>
</div>

<?php require 'views/footer.php'; ?>