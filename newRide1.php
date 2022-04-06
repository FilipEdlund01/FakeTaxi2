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
  
				<form action="send_data.php" method="post">
  
				  <div class="form-outline mb-3">
					<input type="time" id="newRideForm1" class="form-control form-control-lg" name="time" required="required"/>
					<label class="form-label paragraphs" for="newRideForm1" >Time</label>
				  </div>
				  
				  <div class="form-outline mb-3">
					<input type="date" id="newRideForm2" class="form-control form-control-lg" name="date" required="required"/>
					<label class="form-label paragraphs" for="newRideForm2">Date</label>
				  </div>

				  <div class="form-outline mb-3">
					<input type="tel" id="newRideForm3" class="form-control form-control-lg" name="phone" required="required"/>
					<label class="form-label paragraphs" for="newRideForm3">Phone Number</label>
				  </div>
				  <a href="newRide2.php"
				  		type="submit"
                        class="btn btn-success btn-block btn-lg graduateButton text-body registerColor"
                        style="color: white !important"
                        onclick="saveCookies()"
                      >
						Choose Location
				</a>
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