
let pageUrl = window.location.pathname;
let getNav = document.querySelectorAll("nav div ul li a");

for (let i = 0; i < getNav.length; i++) {

  let pageUrlName = pageUrl.split("/");
  let pageUrlLength = pageUrlName.length - 1;

  let pageNav = getNav[i].pathname;
  let pageNavName = pageNav.split("/");
  let pageNavLength = pageNavName.length - 1;
  let pageFinalName = pageNavName[pageNavLength];
  let pageNavExists = pageUrl.includes(pageFinalName);
  // Change links color
  if (pageNavExists == true) {
    getNav[i].style.cssText = "color: #31a6ff;";
  }
  else if (pageUrlName[pageUrlLength] == "") {
    getNav[0].style.cssText = "color: #31a6ff;";
  }
}


//Generování tabulek v userMain
function initialize1() {
  for (let index = 0; index < 8; index++) {
  generateTableHistory("Ride + ID (filter by username)");
   }
  }

function generateTableHistory(name) {
  let parent = document.getElementById("usermainDiv");
  let rows =[
     {
       name: 'petr',   
       email:'petr@gmail.com',
       place:'Praha',
       phone: 895232146,
       time: '0am',
     }
   ]
     let div = document.createElement("div");
     div.setAttribute("class", "card mt-4");
     div.setAttribute("style", "overflow-x:auto;")
     div.setAttribute("id", "divID");

     let header = document.createElement("h3");
     header.innerHTML = name;
     header.setAttribute("class", "text-uppercase text-center mb-4");
     header.setAttribute("id", "headerID");

     let table = document.createElement("table")
     table.setAttribute("class", "table");
     let thead = document.createElement("thead")
     let tr = document.createElement("tr")
     let tableArray = ["Username", "Email", "Place", "Phone", "Time"]

     tableArray.forEach(item=>{
        let th = document.createElement("th")
        th.setAttribute("scope","col")
        th.innerHTML = item;
        tr.appendChild(th);
     })
     thead.appendChild(tr);
     table.appendChild(thead);

     let tbody = document.createElement("tbody")
     rows.forEach(item=>{
        let tr = document.createElement("tr")
        tr.innerHTML = `<td>${item.name}</td><td>${item.email}</td><td>${item.place}</td><td>${item.phone}</td><td>${item.time}</td>`;
        tbody.appendChild(tr);
     })
     table.appendChild(tbody);
     div.appendChild(header);

     div.appendChild(table);
     parent.appendChild(div);
}

function showLocation(position) {
   var latitude = position.coords.latitude;
   var longitude = position.coords.longitude;

   $.post("send_data.php", latitude, longitude);


   /*posialni dat na server pomoci php */
   $.post("send_location.php", latitude);
   $.post("send_location.php", longitude);
   
  e992910f83d584a77fee968eaea5244c4447c5f4
   alert("Latitude : " + latitude + " Longitude: " + longitude);
}

function errorHandler(err) {
   if(err.code == 1) {
      alert("Error: Access is denied!");
   } else if( err.code == 2) {
      alert("Error: Position is unavailable!");
   }
}
   
function getLocation() {

   if(navigator.geolocation) {
      var options = {timeout:60000};
      navigator.geolocation.getCurrentPosition(showLocation, errorHandler, options);
   } else {
      alert("Sorry, browser does not support geolocation!");
   }
}

/*function passVal(){
    var data = {
        latitude, longitude
    };
    $.post("send_data.php", latitude, longitude);
}
passVal();*/





  frame = new JFrame("Google maps");
  let destinationFile = "image.jpg";
try {
   
  let imageUrl = "http://maps.googleapis.com/maps/api/staticmap?zoom=18&size=800x800&markers=45.10232295,-80.14865993&sensor=true";
  let url = new URL(imageUrl);
   frame.add( new JLabel( new ImageIcon( new ImageIcon(url).getImage().getScaledInstance( 630, 600, java.awt.Image.SCALE_SMOOTH ) ) ) );


   let imageUrl2 = "http://maps.googleapis.com/maps/api/staticmap?zoom=18&size=800x800&markers=44.10253392,-81.14871575&sensor=true";
   let url2 = new URL(imageUrl2);
   frame.add( new JLabel( new ImageIcon( new ImageIcon(url2).getImage().getScaledInstance( 630, 600, java.awt.Image.SCALE_SMOOTH ) ) ) );

   frame.setVisible(true);
   frame.pack();
   } catch (IOException) {
       e.printStackTrace();
   System.exit(1);
   }
