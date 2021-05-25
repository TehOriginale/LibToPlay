<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/gameinfo.css" rel ="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>-->
<?php
include_once 'header.php';
?>
<?php
require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';
$name = $_GET['gamesName'];
$game = getGame($conn, $name);
//$tags = getTags($conn, $name);
?>
<div class = "gamePhoto" >
<figure class="figure">
<a style="float:right" class="LogoItem" href = "/RDR2Art"> <img src ="content/RDR2Art.jpg" alt = "ZaidimoArt" height = "600" width = "260">
<figcaption class="figure-caption">Perfecto game 5 youuu bby!</figcaption>
</figure>
</a>
</div>
<div id = tekstas>
<h1>
<?php echo  $name?>
</h1>
<h3>

</h3>

</div>
<div class = Lentele>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">PRating</th>
      <th scope="col">Grating</th>
      <th scope="col">WhereToBuy</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>SMTH/5</td>
      <td>SMTH-1/5</td>
      <td> Amazon<a class="btn btn-success" href="http://www.amazon.com/" role="button" alt = Badabish>BuyNow</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>PRating</td>
      <td>GRating</td>
      <td> Steam<a class="btn btn-success" href="https://store.steampowered.com/" role="button" alt = BadabishSteam>BuyNow!!</a></td>
    </tr>
  </tbody>
</table>
</div>
    
</body>
</html>