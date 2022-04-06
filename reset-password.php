<?php
  require 'header.php';
?>

<main>

 




<link rel="stylesheet" href="css/style.css" />

<body class="indexBackground">
  <div class="mask d-flex align-items-center h-100">
    <div class="container h-100 p-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="background-color: white;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-3 headings">Reset your password.</h2>
              
                <form class="form-resetpwd" action="includes/reset-request.inc.php" method="post" >

                  <div class="form-outline mb-3">
                    <input type="text" class="form-control form-control-lg" name="email" />
                    <label class="form-label paragraphs" > Your Email</label>
                  </div>



                  <div class="form-check d-flex justify-content-center mb-3"></div>
                  <button class="btn btn-success btn-block btn-lg graduateButton text-body registerColor"  type="submit" name="reset-request-submit">Receive new password by mail</button>
                    <p class="text-center text-muted mt-3 paragraphs">Don’t have an account? <a href="register-form.html" class="fw-bold text-body"><u>Register here</u></a></p>
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
        if (isset($_GET["reset"])) {
          if ($_GET["reset"] == "success") {
            echo '<p class="signupsuccess">Check your e-mail!</p>';
          }
        }
      ?>

  

</main>

<?php
  require 'footer.php';
?>
