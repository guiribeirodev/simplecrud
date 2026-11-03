<?php

require_once __DIR__ . '/Controller/UserController.php';

$controller = new UserController();
$route = $_GET['route'] ?? 'index';

switch ($route){
    case 'create':
        $controller->createUser();
        break;
    case 'edit':
        $controller->editUser($_GET['id']);
        break;
    case 'delete':
        $controller->deleteUser($_GET['id']);
        break;
    case 'index':
        $controller->index();
        break;
}