<?php
  include_once 'header.php';
?>

<section class="signup-form">
  <h2>Log In</h2>
  <div class="signup-form-form">




    <div style="background-attachment: fixed; background-repeat: no-repeat; background-size: cover; background-image: url('https://besu.info/wp-content/uploads/2018/04/road-3341140_1920.jpg');">
    <div class="mask d-flex align-items-center h-100 graduate">
      <div class="container h-100 p-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-3" style="color: black;">Register</h2>
                
                  <form action="includes/login.inc.php" method="post" >

                    <div class="form-outline mb-3">
                      <input type="text" id="name" class="form-control form-control-lg" name="uid" />
                      <label class="form-label" style="color: black;" for="registerForm1">user_name/email</label>
                    </div>

                    <div class="form-outline mb-3">
                      <input type="password" id="password" class="form-control form-control-lg" name="pwd" />
                      <label class="form-label" style="color: black;" for="registerForm4">password</label>
                    </div>



                    <div class="form-check d-flex justify-content-center mb-3"></div>
                    <button class="btn btn-success btn-block btn-lg graduateButton text-body registerColor" style="color: white!important;" type="submit" name="submit"
                      onclick="saveCookies()">Log in!</button>

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


  <?php
    // Error messages
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "wronglogin") {
        echo "<p>Wrong login!</p>";
      }
    }
  ?>
</section>

<?php
  include_once 'footer.php';
?>
