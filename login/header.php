<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>


    <header>
 <nav>
<ul>
        <li><a href="index.php">HOME</a></li>
        <?php
        if (isset($_SESSION['id'])) {
          echo "<form action='includes/logout.inc.php'>
          <button>LOG OUT</button>
          </form>";
        } else {
            echo "<form action='includes/login.inc.php' method='POST'>
                  <input type='text' name='uid' placeholder='Username'>
                  <input type='password' name='pwd' placeholder='Password'>
                  <button type='SUBMIT'>LOGIN</button>
                  </form>";
          }


   ?>
  <li><a href="signup.php">SIGNUP</a></li>
</ul>
   </nav>


    </header>
