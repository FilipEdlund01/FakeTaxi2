<html>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/maps.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
</head>

<body>
<div class="usermainBackground">
  <h1 class="mainHeadingMap" style="text-align: center;"> Please if you want to send location copy the current latitude and logitude to the labels below and click Send Location.</h1>
  <h3 class="headings2" style="text-align: center;">To see the longitude and latitude yoou must click on map first</h3>
  <h3 class="headings2" style="text-align: center;">Thank you. FAKE-TAXI team.</h3>

  <div style="text-align: center; form-outline">
  <p class="paragraphsMaps" > Current latitude <span id="latitude"></span>.</p>
  <p class="paragraphsMaps"> Current longitude <span id="longitude"></span>.</p>
  </div>

  <form action="includes/location.inc.php" method="post" id="form">

<div style="align-items-center card">
<div class="form-group" style="text-align:center;">
  <label class="form-label paragraphsMaps">Latitude</label>
  <input type="text" id="latitude" class="form-control sizing" name="latitude" />
</div>

<div class="form-outline mb-2 col-xs-3" style="text-align:center;">
<label class="form-label paragraphsMaps">Longitude</label>
  <input type="text" id="longitude" class="form-control sizing" name="longitude" />
</div>

<div class="mb-5"></div>
<a class="btn btn-success btn-block btn-lg graduateButton text-body mb-3 sizing" type="submit" name="submit" href="userMain.php">Send Location</a>

  </form>
  <a href='userMain.php'>
        <button class="btn btn-success btn-block btn-lg graduateButton text-body sizing">
            Return Home
        </button>
    </a>
</div>
    </div>
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