<?php
    session_start();

    if($_SESSION['Active'] == false){ /* Redirects user to login.php if not logged in */
      header("index.php");
      exit;
  
          }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/index.css" rel ="stylesheet">
</head>
<body>
<div>
  <a class="LogoItem" href = "/index.php"> <img src ="content/test_logo.png" alt = "Logotipias" height = "26" width = "26">
</a>
</div>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="Menu Button">
  <?php
        if(isset($_SESSION["useruid"])) {
            echo "<div><a class='Login' href='/profile.php'>Profile</a></div>";
            echo "<div><a class='dropdown-item' href='includes/logout.inc.php'>Log out</a></div>";
        }
        else {
            echo "<div><a class='Login' href='/login.php'>Login</a></div>";
            echo "<div><a class='dropdown-item' href='/signup.php'>Sign up</a></div>";
        }
    ?>
    <div>
    <a class="dropdown-item" href="/gameinfo.php">Random game of the day</a>
    </div>
  </div>
</div>
