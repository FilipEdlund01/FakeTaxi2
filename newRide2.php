<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script>
      function passVal(){
       var data = {
           latitude, longitude
       };
  
     
    
   }
   function loadLatitude(){
          return data.latitude;
     }
  
  function loadLongitude(){
          return data.longitude;
     }
   passVal();
    </script>
</head>	
<body class="newRideBackground">
	<div class="vh-100"> 
	<div class="mask d-flex align-items-center h-100">
	  <div class="container h-100">
		<div class="row d-flex justify-content-center align-items-center h-100">
		  <div class="col-12 col-md-9 col-lg-7 col-xl-6">
			<div class="card">
			  <div class="card-body p-5">
				<h2 class="text-uppercase text-center mb-3" style="color: black;">Starting location</h2>
  
				<form action="send_data.php" method="post">
        <label 
            style="justify-content: center; color: black; font-size: 20px;">
                Now select whether you will be on your current location, or select location where you will be.
        </label>

		      <button
			  
			   href="index.php"
		        type="submit"
		                  class="btn btn-success btn-block btn-lg graduateButton text-body registerColor"
		                  style="color: white !important;; margin-bottom: 20px;"
	                  >
			 
		      Send Current Location
	        </button>
				
				  <a href="maps.php"
                    type="submit"
                    class="btn btn-success btn-block btn-lg graduateButton text-body registerColor"
                    style="color: white !important"
						
                    onclick="saveCookies()"
                      >
						Choose Location
				  </button>
				</a>
				</form>
  
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </section>
</body>
</html>