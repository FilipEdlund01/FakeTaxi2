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

<button type="submit" name="submit">Send Location</button>




   

  </form>

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
      link.setAttribute("href", "./index.php");
      btn.appendChild(link);
      btn.onclick = proceedFunc;
      marker = L.marker([lat, lng]).addTo(map).bindPopup(btn)
      
      //setLatLng(e.latlng).setContent("You clicked the map at " + e.latlng.toString());

      
    }
    marker.setLatLng(e.latlng);
    
    console.log(e.latlng);
    marker.openPopup();
    selectedLatLng = e.latlng;
 
  }

  map.on("click", onMapClick);

  document.getElementById('latitude1').innerHTML = latlng;
    document.getElementById('longitude1').innerHTML = lng;

  

</script>

</html>





