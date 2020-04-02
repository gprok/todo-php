<?php
require_once('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<div>
    <h1>Completed Tasks</h1>
    <hr>
    <a href="index.php">Tasks</a>
    <hr>
</div>
<div>
    <ul>
        <?php
        $sql = "SELECT * FROM tasks WHERE completed=1";
        $result = $conn->query($sql, PDO::FETCH_ASSOC);
        foreach($result as $row){
            echo  "<li>" . $row['name'] .
                " <a href='undo.php?id=" . $row['id'] . "'>undo</a> 
                  <a href='delete.php?id=" . $row['id'] . "'>delete</a></li>";
        }
        ?>
    </ul>
</div>

</body>
</html>
