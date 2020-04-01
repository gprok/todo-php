<?php
require_once('database.php');
require_once ('page_head.php');

$term = filter_var($_POST['term'], FILTER_SANITIZE_STRING);
?>

<div class="jumbotron">
    <h1 class="display-4">Search Results for <?php echo $term; ?></h1>
    <hr class="my-4">
</div>
<div class="row">

    <ul class="list-group">
        <div class="col-sm">
            <?php
            $sql = "SELECT * FROM tasks WHERE completed=0 AND name LIKE '%$term%'";
            $result = $conn->query($sql, PDO::FETCH_ASSOC);
            foreach($result as $row){
                echo  "<li class='list-group-item'>" . $row['name'] .
                    " <a href='complete.php?id=" . $row['id'] . "'><i class='fas fa-check'></i></a> 
                      <a href='delete.php?id=" . $row['id'] . "'><i class='far fa-trash-alt'></i></a></li>";
            }
            ?>
        </div>
    </ul>
</div>

<?php
require_once ("page_footer.php");
?>
