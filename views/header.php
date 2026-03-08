<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">

<title>MessageHub</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="public/css/style.css">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

<div class="container">

<a class="navbar-brand" href="index.php">

📩 MessageHub

</a>

<button id="theme-toggle" class="btn btn-light">

🌙

</button>

</div>

</nav>

<?php
require_once __DIR__ . '/../helpers/Flash.php';

$flash = Flash::get();
?>

<?php if($flash): ?>

<div class="alert alert-<?= $flash['type'] ?> alert-dismissible fade show m-4">

<?= htmlspecialchars($flash['message']) ?>

<button class="btn-close" data-bs-dismiss="alert"></button>

</div>

<?php endif; ?> 

<script src="public/js/theme.js"></script>