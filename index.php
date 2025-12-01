<?php

require_once "controller/laguController.php";
$controller = new LaguController();

$action = $_GET['action'] ?? 'list';

switch ($action) {

    case 'list':
        $controller->index();
        break;

    case 'tambah':
        $controller->tambah();
        break;

    case 'simpan':           // <--- benar
        $controller->simpan();
        break;

    case 'edit':
        $controller->edit($_GET['id']);
        break;

    case 'update':           // <--- benar
        $controller->update($_GET['id']);
        break;

    case 'delete':           // <--- benar
        $controller->delete($_GET['id']);
        break;

    default:
        $controller->index();
        break;
}
