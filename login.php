<?php
include_once 'header.php';
 ?>



<h2> Logga In </h2>
<form action="includes/login.inc.php" method="post">
  <input type="text" name="uid" placeholder="Epost/Användarnamn">
  <input type="password" name="pwd" placeholder="Lösenord">
  <button type="submit" name="submit">Logga In</button>
</form>

<?php
if (isset($_GET["error"])) {
  if ($_GET["error"] == "emptyinput") {
    echo "<p>Fyll i allt!</p>";
  }
  else if ($_GET["error"] == "wronglogin"){
  echo "<p>fel användarnamn</p>";
}
}
 ?>






 <?php
include_once 'footer.php';
  ?>
