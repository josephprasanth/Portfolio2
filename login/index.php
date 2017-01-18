<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>

<form action="login.php" method="POST">

  <input type="text" name="uid" placeholder="Username"><br>
  <input type="password" name="pwd" placeholder="Password"><br>
  <button type="SUBMIT">LOGIN</button>

</form>

<?php
if (isset($_SESSION['id'])) {
echo $_SESSION['id'];
}

else {
echo "You are not logged in";


}


 ?>

<br><br><br>

<form action="signup.php" method="POST">
<input type="text" name="first" placeholder="FirstName"><br>
<input type="text" name="last" placeholder="LastName"><br>
<input type="text" name="uid" placeholder="Username"><br>
<input type="password" name="pwd" placeholder="Password"><br>
<button type="SUBMIT">SIGN UP</button>

</form>

<br><br><br>

<form action="logout.php">
<button> LOG OUT</button>

</form>
  </body>
</html>
