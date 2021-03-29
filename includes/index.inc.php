<?php
require_once('dbh.inc.php');

if(isset($_POST['query'])) {
    $inpText=$_POST['query'];
    $sql = 'SELECT gamesName FROM games WHERE gamesName LIKE :game';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['game' => '%' . $inpText . '%']);
    $result = mysqli_stmt_get_result($stmt);

    if($result){
        foreach ($result as $row) {
            echo "<a href='#' class='list-group-item list-group-item-action border-1'>".$row['gamesName']."</a>";
        }
    }
    else {
        echo "<p class='list-group-item border-1'>No record</p>";
    }
}