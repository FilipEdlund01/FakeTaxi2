<?php

if (isset($_POST["submit"])) {

  // First we get the form data from the URL
  $latitude = $_POST["latitude"];
  $longitude = $_POST["longitude"];




  require_once "dbh.inc.php";
  require_once 'functions.inc.php';

  if (emptyInputMaps($latitude, $longitude) === true) {
    header("location: ../maps.php?error=emptyinput");
		exit();
  }

  // Now we insert the user into the database
  pasteLocation($conn, $latitude, $longitude);

} else {
	header("location: ../maps.php");
    exit();
}