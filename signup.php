<?php
include_once 'header.php';
 ?>



<h2> Skapa Konto </h2>
<form action="includes/signup.inc.php" method="post">
  <input type="text" name="name" placeholder="Ditt namn">
  <input type="text" name="email" placeholder="Epost..">
  <input type="text" name="uid" placeholder="Användarnamn">
  <input type="password" name="pwd" placeholder="Lösenord">
  <input type="password" name="pwdrepeat" placeholder="Upprepa lösenord">
  <button type="submit" name="submit">Skapa Konto</button>
</form>

<?php
if (isset($_GET["error"])) {
  if ($_GET["error"] == "emptyinput") {
    echo "<p>Fyll i allt!</p>";
  }
  else if ($_GET["error"] == "invalidUid"){
  echo "<p>Välj ett redigt användarnamn</p>";
}
/*else if ($_GET["error"] == "invalidemail"){
echo "<p>Välj ett redigt epost</p>";
} */
else if ($_GET["error"] == "passwordsdontmatch"){
echo "<p>Passwords doesn't match</p>";
}
else if ($_GET["error"] == "usernametaken"){
echo "<p>användarnamn redan taget </p>";
}
else if ($_GET["error"] == "none"){
echo "<p>Du har skapat ditt konto</p>";
}
}
 ?>





 <?php
include_once 'footer.php';
  ?>
