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
<img src ="content/<?php echo $game['gamesPhoto']?>.jpg" height = "600" width = "400">
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
      <th style="text-align:center;" scope="col">#</th>
      <th style="text-align:center;" scope="col">Rating</th>
      <th style="text-align:center;" scope="col" colspan="2">Where to purchase</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th style="text-align:center;" scope="row">#</th>
      <td style="text-align:center;" ><?php echo $game['gamesRating']?></td>
      <td style="text-align:center;"> 
        <img style="margin-left:10px;margin-right:10px;" src = "content/amazonlogo.png" height = "30" width = "110" alt = "Amazon">
        <a style="margin-left:10px;margin-right:10px;" class="btn" href="<?php echo getAmazonLink($name)?>" role="button">
        BuyNow </a>
      </td>
      <td style="text-align:center;">
      <img style="margin-left:10px;margin-right:10px;" src = "content/g2alogo.png" height = "30" width = "110" alt = "G2A">
        <a style="margin-left:10px;margin-right:10px;" class="btn" href="<?php echo getG2ALink($name)?>" role="button">BuyNow</a>
      </td>
    </tr>
  </tbody>
</table>
</div>
</div>

</div>
    
<?php include_once 'footer.php'?>