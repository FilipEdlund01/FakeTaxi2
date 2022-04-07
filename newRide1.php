<!DOCTYPE html>
<html lang="en">
<head>
	<title>New Ride</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>	
<body class="newRideBackground">
	<div class="vh-100"> 
	<div class="mask d-flex align-items-center h-100">
	  <div class="container h-100">
		<div class="row d-flex justify-content-center align-items-center h-100">
		  <div class="col-12 col-md-9 col-lg-7 col-xl-6">
			<div class="card">
			  <div class="card-body p-5">
				<h2 class="text-uppercase text-center mb-3 headings">New Ride</h2>
  
				<form action="includes/newRide.inc.php" method="post">
  
				  <div class="form-outline mb-3">
				  <label class="form-label paragraphs" for="newRideForm1" >Time</label>
					<input type="time" id="newRideForm1" class="form-control form-control-lg" name="time" required="required"/>
					
				  </div>
				  
				  <div class="form-outline mb-3">
				  <label class="form-label paragraphs" for="newRideForm2">Date</label>
					<input type="date" id="newRideForm2" class="form-control form-control-lg" name="date" required="required"/>
					
				  </div>

				  <div class="form-outline mb-3">

				  <label class="form-label paragraphs" for="newRideForm3">Phone Number</label>
				  <input type="text" id="newRideForm3" class="form-control form-control-lg" name="phone" required="required"/>
				  <button class="btn btn-success btn-block btn-lg graduateButton text-body registerColor" style="color: white!important;" type="submit" name="submit"
                      >Send Data</button>

					  <a href="maps.php"
				  		
                        class="btn btn-success btn-block btn-lg graduateButton text-body registerColor"
						style="color: white!important;"
                      
                      
                      >
						Go To Map
				</a>

				  </div>
				 



				</form>
  
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	</div>
</body>
</html>