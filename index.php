<?php
require_once 'Todo.php';
$todos = Todo::read();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  <title>Document</title>
</head>

<body>
  <div class="flex justify-center items-center bg-slate-100 min-h-screen">
    <div class="w-[800px] bg-white shadow-md rounded-lg p-6 mt-10">
      <h1 class="text-3xl">Todo App</h1>
      <form action="process.php?action=create" method="POST">
        <div class="flex items-center mt-4">
          <input name="todo" type="text" placeholder="Enter your todo" class="border border-gray-300 rounded-lg p-2 flex-grow mr-2">
          <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Add Todo</button>
        </div>

      </form>

      <div class="mt-4">
        <ul class="list-disc m-0 p-0">
          <?php foreach ($todos as $row) { ?>
            <li class="flex items-center justify-between p-4 bg-gray-100 rounded-lg mb-2">
              <span class="<?= $row->status ? 'line-through' : '' ?>"><?= $row->todo ?></span>
              <div class="flex space-x-2">
                <?php if (!$row->status) { ?>
                  <a href="process.php?action=update&id=<?= $row->id ?>" class="text-blue-500 hover:text-blue-700">Done</a>
                <?php } ?>
                <?php if ($row->status) { ?>
                  <a href="process.php?action=delete&id=<?= $row->id ?>" class="text-red-500 hover:text-red-700">Delete</a>
                <?php } ?>
              </div>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>

</body>

</html>