<?php
require_once "connection-test.php";
if (isset($_GET['term'])) {

    $query = "SELECT * FROM games WHERE gamesName LIKE ? LIMIT 25";
    $stmt = mysqli_stmt_init($conn);
    $q = '%'.$_POST['term'].'%';

    if(!mysqli_stmt_prepare($stmt, $query)) {
        header("location: test.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $q); // here we can use only a variable
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    
    if (mysqli_num_rows($resultData) > 0) {
        while ($user = mysqli_fetch_array($resultData)) {
         $res[] = $user['gamesName'];
        }
       } else {
         $res = array();
       }
    echo json_encode($res);
}