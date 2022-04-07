function initializeMaps()   {
  proceedFunc(e);
  onMapClick(e);
}

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
    link.innerHTML = "Return home";
    link.setAttribute("href", "./userMain.php");
    btn.appendChild(link);
    btn.onclick = proceedFunc;
    marker = L.marker([lat, lng]).addTo(map).bindPopup(btn);
  }
  marker.setLatLng(e.latlng);
  console.log(e.latlng);
  console.log(e.latlng['lat']);
  latitude1 = e.latlng['lat'];
  longitude1 = e.latlng['lng'];

  marker.openPopup();
  selectedLatLng = e.latlng;
  document.getElementById("latitude").innerHTML = latitude1;

  document.getElementById("longitude").innerHTML = longitude1;

}


map.on("click", onMapClick);
