<?php
    session_start();
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
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />-->
    
     <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 
  <!-- jQuery UI -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>   
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<div>
  <a class="LogoItem" href = "/index.php"> <img src ="content/test_logo.png" alt = "Logotipias" height = "50" width = "40">
</a>
LibToPlay
</div>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" style="background-color: #ef0cdf"type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
