<?php
session_start();

if (!isset($_SESSION["tasks"])) {
  $_SESSION["tasks"] = [];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To-Do List</title>
  <link rel="stylesheet" type="text/css" href="./assets/style.css">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/imgs/icon.png">
  <script>
    function check(event) {
      const task = event.target;

      task.classList.toggle("checked");
    }
  </script>
</head>

<body>
  <div class="container">
    <div class="todo-app">
      <h2>ToDo List <img src="./assets/imgs/icon.png"></h2>
      <form action="./server/add.php" method="post" class="row">
        <input type="text" name="task" id="input-box" placeholder="Add your text">
        <button type="submit">Add</button>
      </form>
      <ul id="list-container">
        <?php foreach ($_SESSION["tasks"] as $index => $task): ?>
          <form method="post" action="./server/delete.php">
            <li onclick="check(event)">
              <?= $task; ?>
              <input type="number" name="id" value="<?= $index ?>" style="display: none;">
              <button>
                <span>&#x00D7</span>
              </button>
            </li>
          </form>
        <?php endforeach; ?>
        <!-- 
        <li class="checked">Task 1</li>
        <li>Task 2</li>
        <li>Task 3</li> 
        -->
      </ul>
    </div>
  </div>
</body>

</html>