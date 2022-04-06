<?php
  include_once 'header.php';
?>
  <link rel="stylesheet" href="css/style.css" />

  <body class="indexBackground">
    <div class="mask d-flex align-items-center h-100">
      <div class="container h-100 p-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="background-color: white;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-3 headings">Login</h2>
                
                  <form action="includes/login.inc.php" method="post" >

                    <div class="form-outline mb-3">
                      <input type="text" id="name" class="form-control form-control-lg" name="uid" />
                      <label class="form-label paragraphs" for="registerForm1">Username or Email</label>
                    </div>

                    <div class="form-outline mb-3">
                      <input type="password" id="password" class="form-control form-control-lg" name="pwd" />
                      <label class="form-label paragraphs" for="registerForm4">Password</label>
                    </div>



                    <div class="form-check d-flex justify-content-center mb-3"></div>
                    <a href="userMAin.php"> 
                    <button class="btn btn-success btn-block btn-lg graduateButton text-body registerColor" style="color: white!important;" type="submit" name="submit"
                      onclick="saveCookies()">Log in!</button></a>
                      <p class="text-center text-muted mt-3 paragraphs">Don’t have an account? <a href="signup.php" class="fw-bold text-body"><u>Register here</u></a></p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  


  <?php
    // Error messages
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
        $alert = "<script>alert('Fill in all fields!');</script>";
        echo $alert;
      }
      else if ($_GET["error"] == "wronglogin") {
        echo "<p>Wrong login!</p>";
        $alert = "<script>alert('Wrong login!(wrong username or password)');</script>";
        echo $alert;
      }
    }else{
      $alert = "<script>alert('You are loged in!');</script>";
        echo $alert;
    }
  ?>
</section>

<?php
  include_once 'footer.php';
?>
