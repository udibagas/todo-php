<?php

require_once 'Todo.php';
$action = $_GET['action'];

switch ($action) {
  case 'create':
    $todo = $_POST['todo'];
    Todo::create($todo);
    break;

  case 'update':
    $id = $_GET['id'];
    Todo::update($id);
    break;

  case 'delete':
    $id = $_GET['id'];
    Todo::delete($id);
    break;

  default:
    # code...
    break;
}

header("Location: index.php");
