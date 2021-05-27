<?php
include_once 'header.php';
?>
<?php
require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';
$name = $_GET['gamesName'];
$game = getGame($conn, $name);
$tags = getTags($conn, $name);
?>
<div class="wrapinfo">
<div class = "gamePhoto" >
<figure class="infopic">
<img src ="content/<?php echo $game['gamesPhoto']?>.jpg" height = "600" width = "350">
</a>
</div>
<div class = "info">
<h1>
<?php echo  $name?>
</h1>
<div>
<i>Tags: 
<?php
foreach($tags as $el) {
  echo ' | '.$el.' ';
}?>
|
</i>
</div>
<h3>
<?php echo $game['gamesDesc']; ?>
</h3>
<div class = "infotable">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Rating</th>
      <th scope="col">Where to purchase</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">#</th>
      <td><?php echo $game['gamesRating']?></td>
      <td> <img src = "content/amazonlogo.png" height = "30" width = "110" alt = "Amazon">
      <a class="btn btn-success" href="<?php echo getAmazonLink($name)?>" role="button">
      BuyNow </a>|<img src = "content/g2alogo.png" height = "30" width = "110" alt = "G2A"> <a class="btn btn-success" href="<?php echo getG2ALink($name)?>" role="button">BuyNow</a></td>
    </tr>
  </tbody>
</table>
</div>
</div>

</div>
    
<?php include_once 'footer.php'?>