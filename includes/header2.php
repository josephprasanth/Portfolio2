<?php
include 'dbh.php';


function load_page($page) {
	$db = mysqli_connect("test1-219494.mysql.binero.se", "219494_ph89094", "1980thereturn", "219494-test1");
mysqli_query($db,"SET NAMES utf8");
$page = mysqli_real_escape_string($db, $page);

  if($page == "") $page = 'start';

  $query = "SELECT * FROM pages WHERE name = '$page'";
  $result = mysqli_query($db, $query);
  if($page = mysqli_fetch_assoc($result)){
    echo $page['content'];
  }else{
    echo "<h1>This page is not available</h1>";
  }
 }


if(!isset($_GET['page'])) $page = ""; else $page = $_GET['page'];




 ?>
<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">
    <meta name="keywords" content="Prasanth joseph, Front End Developer, Front End Utvecklare, KYH, webdesign, Javascript , Jquery , html css">
    <title>Prasanth joseph | Front End Developer</title>
    <link rel="stylesheet" href="assets/css/main.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/morestyles.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/clock.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/clock1.css" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
    <nav>
        <div class="container">
            <img class="menu-icon" src="assets/pictures/menuicon3.png" alt="Click to expand Hamburger" />
          <?php include('includes/nav.php'); ?>





            <ul class="social-list">
                <li>
                    <a href="https://www.linkedin.com/in/joseph-prasanth-3b2858a9"><img src="assets/pictures/linkedinicon.png" alt="Linkedin" /></a>
                </li>
                <li>
                    <a href="https://www.facebook.com/millionairecreatorprotocols/"><img src="assets/pictures/facebookicon.png" alt="Facebook" /></a>
                </li>
                <li>
                    <a href="https://twitter.com/themindlord"><img src="assets/pictures/twitter-logo-button24.png" alt="Twitter" /> </a>
                </li>
            </ul>
        </div>
    </nav>

    <header class="container">
        <img class="symbol" src="assets/pictures/pj.png" alt="PJ Logo" />
        <h1>PJ Design Portfolio</h1>
        <h3>DIGITAL MONETISATION SOLUTIONS FOR YOUR BUSINESS</h3>
    </header>
