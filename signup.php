<?php
  include_once 'header.php';
?>
  <link rel="stylesheet" href="css/style.css" />


  <body class="indexBackground">
    <div class="mask d-flex align-items-center h-100 graduate">
      <div class="container h-100 p-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="background-color:white;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-3 headings">Register</h2>
                
                  <form action="includes/signup.inc.php" method="post" >

                    <div class="form-outline mb-3">
                      <label class="form-label paragraphs" for="registerForm1">Name</label>
                      <input type="text" id="name" class="form-control form-control-lg" name="name" />
                    </div>

                    <div class="form-outline mb-3">
                    <label class="form-label paragraphs" for="registerForm2">Email</label>
                      <input type="email" id="email" class="form-control form-control-lg" name="email" />
                    </div>

                    <div class="form-outline mb-3">
                    <label class="form-label paragraphs" for="registerForm3">Username</label>
                      <input type="text" id="user" class="form-control form-control-lg" name="uid" />
                    </div>

                    <div class="form-outline mb-3">
                    <label class="form-label paragraphs" for="registerForm4">Password</label>
                      <input type="password" id="password" class="form-control form-control-lg" name="pwd" />
                    </div>

                    <div class="form-outline mb-2">
                    <label class="form-label paragraphs" for="registerForm5">Repeat your password</label>
                      <input type="password" id="password_repeated" class="form-control form-control-lg"
                        name="pwdrepeat" />
                    </div>

                    <div class="form-check d-flex justify-content-center mb-3"></div>
                    <button class="btn btn-success btn-block btn-lg graduateButton text-body registerColor" style="color: white!important;" type="submit" name="submit"
                      onclick="saveCookies()">Register</button>
                    <p class="text-center text-muted mt-3 mb-0">
                      Have already an account?
                      <a href="login.php" class="fw-bold text-body"><u>Login here</u></a>
                    </p>
                  </form>

                  <p class="text-center text-muted mt-3 mb-0">
                      Forgot your password?
                      <a href="reset-password.php" class="fw-bold text-body"><u>Click here!</u></a>
            
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

 

  <?php
    // Error messages
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<h1>Fill in all fields!</h1>";
        $alert = "<script>alert('Fill all fields!');</script>";
        echo $alert;
      }
      else if ($_GET["error"] == "invaliduid") {
        echo "<p>Choose a proper username!</p>";
        $alert = "<script>alert('Choose a proper username!');</script>";
        echo $alert;
      }
      else if ($_GET["error"] == "invalidemail") {
        echo "<p>Choose a proper email!</p>";
        $alert = "<script>alert('Choose a proper email!');</script>";
        echo $alert;
      }
      else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>Passwords doesn't match!</p>";
        $alert = "<script>alert('Passwords doesn't match!');</script>";
        echo $alert;
      }
      else if ($_GET["error"] == "stmtfailed") {
        echo "<p>Something went wrong!</p>";
        $alert = "<script>alert('Something went wrong!');</script>";
        echo $alert;
      }
      else if ($_GET["error"] == "usernametaken") {
        echo "<p>Username already taken!</p>";
        $alert = "<script>alert('Username already taken!');</script>";
        echo $alert;
      }
      else if ($_GET["error"] == "none") {
        echo "<p>You have signed up!</p>";
        $alert = "<script>alert('You have signed up!');</script>";
        echo $alert;
      }
    }
  ?>
</section>

<?php
  include_once 'footer.php';
?>
