<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MessageHub</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"> 
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="public/css/style.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid px-4">

    <a class="navbar-brand" href="index.php">
      <span class="brand-icon">
        <i class="bi bi-envelope-paper-fill"></i>
      </span>
      MessageHub
    </a>

    <button id="theme-toggle" title="Alternar tema">
      <i class="bi bi-moon-stars-fill"></i>
    </button>

  </div>
</nav>

<?php
require_once __DIR__ . '/../helpers/Flash.php';
$flash = Flash::get();
?>

<?php if ($flash): ?>
<div class="container-fluid px-4 pt-3">
  <div class="alert alert-<?= $flash['type'] ?> alert-dismissible fade show d-flex align-items-center gap-2" role="alert">
    <?php if ($flash['type'] === 'success'): ?>
      <i class="bi bi-check-circle-fill"></i>
    <?php else: ?>
      <i class="bi bi-exclamation-triangle-fill"></i>
    <?php endif; ?>
    <?= htmlspecialchars($flash['message']) ?>
    <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"></button>
  </div>
</div>
<?php endif; ?>

<script src="public/js/theme.js"></script>