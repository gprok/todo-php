<?php
require_once('database.php');
?>

<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<div>
    <h1>Tasks</h1>
    <hr>
    <a href="completed.php">Completed</a>
    <hr>
</div>

<div>
    <form class="lead" method="post" action="add_task.php">
        <input type="text" name="task" > <button type="submit">Add</button>
    </form>
</div>
<div>

    <ul>
        <?php
        $sql = "SELECT * FROM tasks WHERE completed=0";
        $result = $conn->query($sql, PDO::FETCH_ASSOC);
        foreach($result as $row){
            echo  "<li>" . $row['name'] .
                " <a href='complete.php?id=" . $row['id'] . "'>done</a> 
              <a href='delete.php?id=" . $row['id'] . "'>delete</a></li>";
        }
        ?>
    </ul>
</div>

</body>
</html>
