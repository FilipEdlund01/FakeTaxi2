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

  <p> Current latitude <span id="latitude1"></span>.</p>
  <p> Current longitude <span id="longitude1"></span>.</p>

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

  <div onload="initializeMaps()" id="map"></div>
</body>
<script src= "js/maps.js"></script>

</html>





