<?php
  session_start();
  include_once 'includes/functions.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Project 01</title>
    <!--I won't do more than barebone HTML, since this isn't an HTML tutorial.-->
  <link rel="stylesheet" href="css/style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <script defer src="check.js"></script>
</head>

    <!--A quick navigation-->
    <nav>
      
      <div class="wrapper" id="navDiv">
        <a href="userMain.php"></a>
        <ul>
          <li><a href="userMain.php">Home</a></li>
          <li><a href="discover.php">About Us</a></li>
          <li><a href="newRide1.php">Find Route</a></li>
          <?php
            if (isset($_SESSION["useruid"])) {
             echo "<li><a href='profile.php'>Profile Page</a></li>";
             echo "<li><a href='logout.php'>Logout</a></li>";
              
            }
            else {
              echo "<li><a href='signup.php'>Sign up</a></li>";
              echo "<li><a href='login.php'>Log in</a></li>";
            }
          ?>


        </ul>
        
      </div>
      
    </nav>
    <div class="d-flex col-xs-3 col-sm-6 col-md-8 col-lg-10" style="align-items-center">
					<a href="newRide1.php">
						<button type="button" class="btn btn-primary btn-circle" id="btndisclaimer">
							<span class="glyphicon">&#x2b;</span>
						</button>
					</a>

				</div>
    <script src="js/script.js"></script>
<!--A quick wrapper to align the content (ends in footer.php)-->
