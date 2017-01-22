<?php
date_default_timezone_set('Europe/Stockholm');
include 'dbh.inc.php';
include 'comments.inc.php';
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Comment</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/ZIMHrmgDQiM" frameborder="0" allowfullscreen></iframe>

<?php
echo "<form method='POST' action='".setComments($conn)."'>
  <input type='hidden' name='uid' value='Anonymous'>
  <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
<textarea name='message'></textarea><br>
<button type='submit' name='commentSubmit'>Comment</button>
</form>";

getComments($conn);


?>


  </body>
</html>
