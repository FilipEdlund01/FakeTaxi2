<?php

if (isset($_POST["submit"])) {

  // First we get the form data from the URL
  $latitude = $_POST["latitude"];
  $longitude = $_POST["longitude"];


  // Then we run a bunch of error handlers to catch any user mistakes we can (you can add more than I did)
  // These functions can be found in functions.inc.php

  require_once "dbh.inc.php";
  require_once 'functions.inc.php';



  // Now we insert the user into the database
  pasteLocation($conn, $latitude, $longitude);

} else {
	header("location: ../maps.php");
    exit();
}