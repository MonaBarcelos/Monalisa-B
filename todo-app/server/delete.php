<?php
    session_start();
    require("./utils/go_back.php");

    $task_id = $_POST["id"];

    if (task_exists($task_id, $_SESSION["tasks"])) remove_task($task_id, $_SESSION["tasks"]);

    go_back();

    function task_exists($index, &$tasks)
    {
        return isset($tasks[$index]);
    }

    function remove_task($index, &$tasks)
    {
        unset($tasks[$index]);
        $tasks = array_values($tasks);
    }

    ?>