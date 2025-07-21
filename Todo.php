<?php

require_once 'connection.php';

class Todo
{
  static function create($todo)
  {
    global $pdo;
    $pdo->query("INSERT INTO todos (todo) VALUES ('$todo')");
  }

  static function read()
  {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM todos");
    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }

  static function update($id)
  {
    global $pdo;
    $pdo->query("UPDATE todos SET status = true WHERE id = $id");
  }

  static function delete($id)
  {
    global $pdo;
    $pdo->query("DELETE FROM todos WHERE id = $id");
  }
}
