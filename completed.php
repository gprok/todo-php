<?php
require_once('database.php');
require_once ('page_head.php');
?>

<div class="jumbotron">
    <h1 class="display-4">Completed Tasks</h1>
    <hr class="my-4">
</div>
<div class="row">

    <ul class="list-group">
        <div class="col-sm">
            <?php
            $sql = "SELECT * FROM tasks WHERE completed=1";
            $result = $conn->query($sql, PDO::FETCH_ASSOC);
            foreach($result as $row){
                echo  "<li class='list-group-item'>" . $row['name'] .
                    " <a href='undo.php?id=" . $row['id'] . "'><i class='fas fa-undo-alt'></i></a> 
                      <a href='delete.php?id=" . $row['id'] . "'><i class='far fa-trash-alt'></i></a></li>";
            }
            ?>
        </div>
    </ul>
</div>

<?php
require_once ("page_footer.php");
?>
