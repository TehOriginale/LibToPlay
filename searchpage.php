<?php
  include_once 'header.php';
  ?>
<!-- <form action="includes/searchpage.inc.php" method="get"> -->
<div class="listContainer">
<div class="list-group listas">
<?php 
require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';
$games = getGames($conn);
foreach($games as $el) {
    $name = $el['gamesName'];
    $desc = $el['gamesDesc'];
    $rate = $el['gamesRating'];
    ?>
    <a href="#" class="listasPoint list-group-item list-group-item-action flex-column align-items-start active">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1"><?php echo $name;?></h5>
      <small>Rating <?php echo $rate;?></small>
    </div>
    <p class="mb-1"><?php echo $desc;?></p>
    <small>Donec id elit non mi porta.</small>
  </a>
  <?php }?>

  
</div>
</div>
<!-- </form> -->
<?php
include_once 'footer.php';
?>