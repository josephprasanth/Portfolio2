<?php session_start()?>
<?php
include('includes/header2.php');
?>

<section>
  <div class='container'>
<h3>Administrator</h3>
</div>
</section>


<?php
if (isset($_POST['password']) && $_POST['password'] == "james") {
$_SESSION['admin'] = true;
}



if(!isset($_SESSION['admin']) || !$_SESSION['admin']) {
echo "
      <form action='' method = 'post'>
      Password: <input type='password' name='password'>
      <input type='submit' value='Log In'>
      </form>
";
}
else {
run_admin();
echo "<form action='includes/logout.inc.php'>
  <button>LOG OUT</button>
  </form>";
}






function run_admin() {
  echo "
  <body>
      <nav>
          <div class='container'>
  	  		<ul class='nav-list'>
  			<li><a href='?page=admin&adminpage=text'>Text Administration</a></li>
  			</ul>
        </div>
  	</nav>
    </body>
  	";
}


if(!isset($_GET['adminpage'])) $adminpage= "";
else $adminpage = $_GET['adminpage'];
switch($adminpage){
		case 'text':
			run_text_admin();
			break;
		default:
			echo "Pick a section you want to change.";
	}





  function run_text_admin(){
  		$db = mysqli_connect("test1-219494.mysql.binero.se", "219494_ph89094", "1980thereturn", "219494-test1");
  	mysqli_query($db, "SET NAMES utf8");

  	foreach($_POST as $k => $v){
  		$clean[$k] = mysqli_real_escape_string($db, $v);
  	}

  	if(isset($_POST['savepage'])){
  		$query = "
  			UPDATE pages
  			SET content = '{$clean['content']}'
  			WHERE id = {$clean['id']}

  		";
  		if(mysqli_query($db, $query)){
  			echo "Changes have been saved.";
  		}else{
  			echo "Something went wrong.";
  		}
  	}


  	$query = "SELECT * FROM pages";
  	$result = mysqli_query($db, $query);
  	while($page = mysqli_fetch_assoc($result)){
  		echo "
  			<form action='' method='post'>
  				<h1>{$page['name']}</h1>
  				<textarea name='content' class='pagecontent'>{$page['content']}</textarea>
  				<input type='hidden' name='id' value='{$page['id']}'>
  				<input type='submit' value='Save Changes' name='savepage'>
  			</form>
  		";
  	}
  }
