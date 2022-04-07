<?php

if (isset($_POST["submit"])) {

 //data z url 
  $latitude = $_POST["latitude"];
  $longitude = $_POST["longitude"];




  require_once "dbh.inc.php";
  require_once 'functions.inc.php';

  if (emptyInputMaps($latitude, $longitude) === true) {
    header("location: ../maps.php?error=emptyinput");

		exit();
  }

  
  pasteLocation($conn, $latitude, $longitude);

} else {
	header("location: ../maps.php");
    exit();
}