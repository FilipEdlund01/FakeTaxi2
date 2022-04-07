<?php

if (isset($_POST["submit"])) {

  // First we get the form data from the URL
  $time = $_POST["time"];
  $date = $_POST["date"];
  $phone = $_POST["phone"];


  // Then we run a bunch of error handlers to catch any user mistakes we can (you can add more than I did)
  // These functions can be found in functions.inc.php

  require_once "dbh.inc.php";
  require_once 'functions.inc.php';



  // Now we insert the user into the database
  pasteNewRide($conn, $time, $date, $phone);
  

} else {
	header("location: ../newRide1.php");
    exit();
}