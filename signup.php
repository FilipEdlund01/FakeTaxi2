<?php
  include_once 'header.php';
?>

<section class="signup-form">
  <h2>Sign Up</h2>
  <div class="signup-form-form">

  <link rel="stylesheet" href="css/style.css" />



  <body class="indexBackground">
    <div class="mask d-flex align-items-center h-100 graduate">
      <div class="container h-100 p-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-3 headings">Register</h2>
                
                  <form action="includes/signup.inc.php" method="post" >

                    <div class="form-outline mb-3">
                      <input type="text" id="name" class="form-control form-control-lg" name="name" />
                      <label class="form-label paragraphs" for="registerForm1">Name</label>
                    </div>

                    <div class="form-outline mb-3">
                      <input type="email" id="email" class="form-control form-control-lg" name="email" />
                      <label class="form-label paragraphs" for="registerForm2">Email</label>
                    </div>

                    <div class="form-outline mb-3">
                      <input type="text" id="user" class="form-control form-control-lg" name="uid" />
                      <label class="form-label paragraphs" for="registerForm3">Username</label>
                    </div>

                    <div class="form-outline mb-3">
                      <input type="password" id="password" class="form-control form-control-lg" name="pwd" />
                      <label class="form-label paragraphs" for="registerForm4">Password</label>
                    </div>

                    <div class="form-outline mb-2">
                      <input type="password" id="password_repeated" class="form-control form-control-lg"
                        name="pwdrepeat" />
                      <label class="form-label paragraphs" for="registerForm5">Repeat your password</label>
                    </div>

                    <div class="form-check d-flex justify-content-center mb-3"></div>
                    <button class="btn btn-success btn-block btn-lg graduateButton text-body registerColor" style="color: white!important;" type="submit" name="submit"
                      onclick="saveCookies()">Register</button>
                    <p class="text-center text-muted mt-3 mb-0">
                      Have already an account?
                      <a href="login.php" class="fw-bold text-body"><u>Login here</u></a>
                    </p>
                  </form>
                </div>
              </div>
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
        echo "<p>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "invaliduid") {
        echo "<p>Choose a proper username!</p>";
      }
      else if ($_GET["error"] == "invalidemail") {
        echo "<p>Choose a proper email!</p>";
      }
      else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>Passwords doesn't match!</p>";
      }
      else if ($_GET["error"] == "stmtfailed") {
        echo "<p>Something went wrong!</p>";
      }
      else if ($_GET["error"] == "usernametaken") {
        echo "<p>Username already taken!</p>";
      }
      else if ($_GET["error"] == "none") {
        echo "<p>You have signed up!</p>";
      }
    }
  ?>
</section>

<?php
  include_once 'footer.php';
?>
