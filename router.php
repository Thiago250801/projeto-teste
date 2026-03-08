<?php

$page = $_GET['page'] ?? 'listar';

switch ($page) {

    case 'visualizar':
        require 'views/visualizar.php';
        break;

    case 'editar':
        require 'views/editar.php';
        break;

    default:
        require 'views/listar.php';
}