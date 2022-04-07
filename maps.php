<html>

<head>
  <link rel="stylesheet" href="css/maps.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
</head>

<body>

  <h1> Please if you want to send location copy the current latitude and logitude to the labels below and click Send Location.</h1>
  <h2>To see the longitude and latitude yoou must click on map first</h2>
  <h3>Thank you. FAKE-TAXI team.</h3>
    

  <p> Current latitude <span id="latitude"></span>.</p>
  <p> Current longitude <span id="longitude"></span>.</p>

  <form action="includes/location.inc.php" method="post" id="form">


<div class="form-outline">
  <input type="text" id="latitude" class="form-control form-control-lg" name="latitude" />
  <label class="form-label" style="color: black;" for="registerForm4">Latitude</label>
</div>

<div class="form-outline mb-2">
  <input type="text" id="longitude" class="form-control form-control-lg"
    name="longitude" />
  <label class="form-label" style="color: black;" for="registerForm5">Longitude</label>
</div>

<div class="form-check d-flex justify-content-center mb-3"></div>


<button type="submit" name="submit" href="index.php">Send Location</button>

  </form>
  <a href='userMain.php'>
        <button class="GFG">
            Return Home
        </button>
    </a>

  <div onload="initializeMaps()" id="map"></div>

  <?php
  
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>You didnt filled the label/s </p>";
        $alert = "<script>alert('You didnt filled the label/s!');</script>";
        echo $alert;
      }

    }else{
      $alert = "<script>alert('You have send your destination location!');</script>";
        echo $alert;
    }
  ?>
</body>
<script src= "js/maps.js">

 
</script>

</html>





