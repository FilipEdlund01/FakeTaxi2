<?php

if (isset($_POST["submit"])) {


  $time = $_POST["time"];
  $date = $_POST["date"];
  $phone = $_POST["phone"];

  require_once "dbh.inc.php";
  require_once 'functions.inc.php';

  pasteNewRide($conn, $time, $date, $phone);

} else {
	header("location: ../newRide1.php");
    exit();
}