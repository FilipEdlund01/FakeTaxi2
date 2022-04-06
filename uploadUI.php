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
                <h2 class="text-uppercase text-center mb-3 headings">Upload some info about you =)</h2>
                
                  <form action="upload_files.php" method="POST" enctype="multipart/form-data">

                      <input type="file" id="file"  name="file" />
                    
                    <button href="userMain.php" type="submit" name="submit"
                      >Upload Files</button>

                      <p class="text-center text-muted mt-3 paragraphs" href="signup.php">Don’t have an account? 
                          <a href="signup.php" class="fw-bold text-body"><u>Register here</u></a></p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  



</section>

<?php
  include_once 'footer.php';
?>
