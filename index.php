  <?php
  include_once 'header.php';
  ?>
  <form>
  <?php
  if(isset($_SESSION["useruid"])) {
            echo "<p>Hello there " . $_SESSION["useruid"] ."<p>";
        }
  ?>
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

<?php
include_once 'footer.php';
?>