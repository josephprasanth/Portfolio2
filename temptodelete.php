	$db = mysqli_connect("localhost","root","","portfolio2");


  	$db = mysqli_connect("test1-219494.mysql.binero.se", "219494_ph89094", "1980thereturn", "219494-test1");







Spara ändringar



$query=mysqli_query($db_connect,"INSERT INTO user (fname, lname, email) VALUES ('$fname','$lname','$email')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);
header("location:index.php?note=success");



include("dbconnect.php");
$note=$_REQUEST['note'];
?>


<div id="page-wrap">
    <?PHP if($note=='success')
    {
    echo "<div class=\"success\">Form successfully submitted!</div>";
    }
?>



#page-wrap {
    width: 660px;
    background: white;
    padding: 20px 50px 20px 50px;
    margin: 20px auto;
    min-height: 500px;
    height: auto !important;
    height: 500px;
}















<input type="button" value="Submit" id="btnsubmit" onclick="submitForm()">
The form
And the function
Try the following

function submitForm() {
// Get the first form with the name
// Hopefully there is only one, but there are more, select the correct index
var frm = document.getElementsByName('contact-form')[0];
frm.submit(); // Submit
frm.reset(); // Reset
return false; // Prevent page refresh
}
function submitForm() {
var frm = document.getElementsByName('contact-form')[0];
frm.submit();
frm.reset();
return false;
}
Whiteout all the comments
