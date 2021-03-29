  <?php
  include_once 'header.php';
  ?>
  <form action="includes/index.inc.php" method="post">
  <!-- <?php
  if(isset($_SESSION["useruid"])) {
            echo "<p>Hello there " . $_SESSION["useruid"] ."<p>";
        }
  ?> -->
  <div class="filter-group">
    <label for="ImputGame1">Game#1</label>
    <input type="text" name="firstgame" id="inputgame1" class="form-control" placeholder="Declare your first game" >
  </div>
  <div class="col-md-5" style="position:relative;margin-top:100px;margin-left:-800px;">
    <div class="list-group" id="showlist">
    
    </div>
  </div>
  <div class="filter-group">
    <label for="ImputGame2">Game#2</label>
    <input type="text" name="secondgame" id="inputgame2" class="form-control" placeholder="Declare your second game">
  </div>
  <div class="filter-group">
    <label for="ImputGame3">Game#3</label>
    <input type="text" name="thirdgame" id="inputgame3" class="form-control" placeholder="Declare your third game">
  </div>

</form>
<div id ="SubButton">
<button type="submit" class="btn">Submit</button>
</div>
</main>
<script type="text/javascript">
  $(function() {
     $( "#inputgame1" ).autocomplete({
       source: 'includes/ajax.search.inc.php',
     });
     $( "#inputgame2" ).autocomplete({
       source: 'includes/ajax.search.inc.php',
     });
     $( "#inputgame3" ).autocomplete({
       source: 'includes/ajax.search.inc.php',
     });
  });
</script>
<?php
include_once 'footer.php';
?>