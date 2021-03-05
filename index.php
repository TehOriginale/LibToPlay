
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
    <div>
    <a class="Login" href="/login.php">Login</a>
</div>
<div>
    <a class="dropdown-item" href="/signup.php">Sign up</a>
    </div>
    <div>
    <a class="dropdown-item" href="/gameinfo.php">Random game of the day</a>
    </div>
  </div>
</div>

  <form>
  <div class="filter-group">
    <label for="ImputGame1">Game#1</label>
    <input type="FirstGame" class="form-control" id="ImputGame1" placeholder="Declare your first game" >
   
  </div>
  <div class="filter-group">
    <label for="ImputGame2">Game#2</label>
    <input type="Secondgame" class="form-control" id="ImputGame2" placeholder="Declare your second game">
  </div>
  <div class="filter-group">
    <label for="ImputGame3">Game#3</label>
    <input type="ThirdGame" class="form-control" id="ImputGame3" placeholder="Declare your third game">
  </div>
  
</form>
<div id ="SubButton">
<button type="submit" class="btn">Submit</button>
</div>
  </main>
  <scrip type = "text/javascript" src= bootstrap/js/bootstrap.bundle.js> </script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>