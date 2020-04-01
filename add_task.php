<?php
require_once('database.php');

$task = $_POST['task'];

$task = filter_var($task, FILTER_SANITIZE_STRING);

$sql = "INSERT INTO tasks (name) VALUES ('$task')";
$conn->exec($sql);

header("Location: index.php");
die();