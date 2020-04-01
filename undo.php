<?php
require_once('database.php');

$id = $_GET['id'];

$sql = "UPDATE tasks SET completed=0 WHERE id=$id";
$conn->exec($sql);

header("Location: completed.php");
die();