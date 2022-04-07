<?php


function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
	$result;
	if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}


function invalidUid($username) {
	// opatreni proti sql drop table a podobne
	$result;
	if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		$result = true;
	}
	else {
		$result = false;
	}

	return $result;
}


function invalidEmail($email) {
	$result;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}


function pwdMatch($pwd, $pwdrepeat) {
	$result;
	if ($pwd !== $pwdrepeat) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}


function uidExists($conn, $username) {
  $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../signup.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $username, $username);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else {
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);
}


function createUser($conn, $name, $email, $username, $pwd) {
  $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";

	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../signup.php?error=stmtfailed");
		exit();
	}

	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	header("location: ../signup.php?error=none");
	exit();
}

function emptyInputLogin($username, $pwd) {
	$result;
	if (empty($username) || empty($pwd)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}


function loginUser($conn, $username, $pwd) {
	$uidExists = uidExists($conn, $username);

	if ($uidExists === false) {
		header("location: ../login.php?error=wronglogin");
		exit();
	}

	$pwdHashed = $uidExists["usersPwd"];
	$checkPwd = password_verify($pwd, $pwdHashed);

	if ($checkPwd === false) {
		header("location: ../login.php?error=wronglogin");
		exit();
	}
	elseif ($checkPwd === true) {
		session_start();
		$_SESSION["userid"] = $uidExists["usersId"];
		$_SESSION["useruid"] = $uidExists["usersUid"];
		header("location: ../userMain.php?error=none");
		exit();
	}
}


function pasteLocation($conn, $latitude, $longitude) {
	$sql = "INSERT INTO location (latitude, longitude) VALUES (?, ?);";
	
  
	  $stmt = mysqli_stmt_init($conn);
	  if (!mysqli_stmt_prepare($stmt, $sql)) {
		   header("location: ../maps.php?error=stmtfailed");
		  exit();
	  }
  
	  
  
	  mysqli_stmt_bind_param($stmt, "ss", $latitude, $longitude);
	  mysqli_stmt_execute($stmt);
	  mysqli_stmt_close($stmt);
	  mysqli_close($conn);
	  header("location: ../maps.php?error=none");
	  exit();
  }

 

  function pasteNewRide($conn, $time, $date, $phone) {
	$sql = "INSERT INTO newride (time, date ,phone) VALUES (?, ?, ?);";
	
  
	  $stmt = mysqli_stmt_init($conn);
	  if (!mysqli_stmt_prepare($stmt, $sql)) {
		   header("location: ../newRide1.php?error=stmtfailed");
		  exit();
	  }
  
	  
  
	  mysqli_stmt_bind_param($stmt, "sss", $time, $date, $phone);
	  mysqli_stmt_execute($stmt);
	  mysqli_stmt_close($stmt);
	  mysqli_close($conn);

	  header("location: ../newRide1.php?error=none");
	  exit();
  }

  function emptyInputMaps($lat, $lng) {
	$result;
	if (empty($lat) || empty($lng)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}



