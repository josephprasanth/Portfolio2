<?php

//print_r($_POST);
if(!isset($_POST['name'])) $name = ""; else $name = $_POST['name'];
if(!isset($_POST['telephone'])) $telephone = ""; else $telephone = $_POST['telephone'];
if(!isset($_POST['email'])) $email = ""; else $email = $_POST['email'];
if(!isset($_POST['message'])) $message = ""; else $message = $_POST['message'];
if (isset($_POST['commentSubmit'])) {

  $query=mysqli_query($db,"INSERT INTO t_notification (name, telephone, email,  message)

  VALUES ('$name','$telephone','$email', '$message')") or die(mysqli_error($conn));
$name = '';
$telephone = '';
$email = '';
$message = '';

}

echo '<form method="post" action="index.php" id="contact-form" >
    <input type="text" name="name" placeholder="Name" value="'.$name.'"/>
    <input type="text" name="telephone" placeholder="Telephonenumber" value="'.$telephone.'" />
    <input type="text" name="email" placeholder="Email@address.com"  value="'.$email.'"/>
    <input type="textbox" name="message" placeholder="Your Message" value="'.$message.'"/>

    <button type="submit" name="commentSubmit" onClick= "submitForm()">Send</button>

</form>';



echo "
    <script type=\"text/javascript\">
    function submitForm() {
      var frm = document.getElementById('contact-form');

    frm.submit();

alert('Thank you for contacting us! We Will be getting back to you soon!');
    return false;
    }

    </script>
";
?>
