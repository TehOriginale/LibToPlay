<?php
  include_once 'header.php';
  ?>
<!-- <form action="includes/searchpage.inc.php" method="get"> -->
<div class="listContainer">
<main>
<div class="list-group listas">
<?php 
require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';

$gamest = get3Games($conn);
$tags = getSimTags($conn, $gamest);
$utags = array_count_values($tags);
arsort($utags);
$games = getAllSortGames($utags, $conn);
foreach($games as $el) {
    $name = $el['gamesName'];
    $desc = $el['gamesDesc'];
    $rate = $el['gamesRating'];
    ?>
    <a href="gameinfo.php?gamesName=<?php echo $name?>" class="listasPoint list-group-item list-group-item-action flex-column align-items-start active">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1"><?php echo $name;?></h5>
      <small>Rating <?php echo $rate;?></small>
    </div>
    <p class="mb-1"><?php echo $desc;?></p>
  </a>
  <?php }?>

  
</div>
</main>
</div>
<!-- </form> -->
</body>
</html>