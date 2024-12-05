<?php
session_start();
require("./utils/go_back.php");

$task = $_POST["task"];
$is_valid = validate_task($task);

if ($is_valid); {
    array_push($_SESSION["tasks"], $task);
    go_back();
}

function validate_task($task)
{
    if (empty($task)) go_back();

    return true;
}
