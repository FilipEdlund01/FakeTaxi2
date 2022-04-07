<?php
  session_start();
  include_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fake Taxi</title>
  
  


    <meta charset="utf-8" />
    
  <link rel="stylesheet" href="styles.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <script defer src="check.js"></script>
  <link rel="stylesheet" href="css/maps.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
 
  </head>
  <body>

    <!--A quick navigation-->
    <nav>
      <div class="wrapper">
        <a href="index.php"><img src="img/logo-white.png" alt="Blogs logo"></a>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="discover.php">About Us</a></li>
          <li><a href="blog.php">Find Route</a></li>
          <li><a href="maps.php">Maps</a></li>
          <?php
            if (isset($_SESSION["useruid"])) {
              echo "<li><a href='profile.php'>Profile Page</a></li>";
              echo "<li><a href='logout.php'>Logout</a></li>";
            }
            else {
              echo "<li><a href='signup.php'>Sign up</a></li>";
              echo "<li><a href='login.php'>Log in</a></li>";
            }
          ?>
        </ul>
      </div>
    </nav>
    <p> Hello! I'm <span id="latitude1"></span>.</p>
  <p> Hello! I'm <span id="longitude1"></span>.</p>
 




  <div id="map"></div>
</body>
<script>
  var map = L.map("map").setView([50.074, 14.436], 13);

  L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
    attribution:
      '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
  }).addTo(map);

  lat = 50.074;
  lng = 14.436;
  var selectedLatLng = 0;
  var marker = -1;

  function proceedFunc(e) {
    console.log(selectedLatLng);
  }

  function onMapClick(e) {
    if (marker == -1) {
      let btn = document.createElement("button");
      let link = document.createElement("a");
      link.innerHTML = "Click me";
     // link.setAttribute("href", "./userMain.html");
      btn.appendChild(link);
      btn.onclick = proceedFunc;
      marker = L.marker([lat, lng]).addTo(map).bindPopup(btn);
      
    }
    marker.setLatLng(e.latlng);
    console.log(e.latlng);
    marker.openPopup();
    selectedLatLng = e.latlng;
  }

  map.on("click", onMapClick);





</script>



<!--A quick wrapper to align the content (ends in footer.php)-->
<div class="wrapper">



