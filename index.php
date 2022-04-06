<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel ="stylesheet" href="css/index.css">


	<title>Main Page</title>
</head>
<body>
	 <!-- Video Source -->
  <!-- https://www.pexels.com/video/aerial-view-of-beautiful-resort-2169880/ -->
  <section class="showcase">
    <header>
      <h2 class="logo">FAKE-TAXI: </h2>
      <h4 class="logo">By Ruben Dobes, Daniel Hort and Filip Edlund </h4>
      <div class="toggle"></div>
    </header>
    <video src="videos/backround.mp4" muted loop autoplay></video>
    <div class="overlay"></div>
    <div class="text">
      <h2>Save Time And Money With: </h2> 
      <h3>FAKE-TAXI</h3>
      <p>Hi we are free open-source website to connect people. 
      Have you ever thought about how inefficient it is to go to work by car alone?
      In today's world with high gas prices and a warming planet it is almost a shame.
      And here we are! Use our website FAKE-TAXI to connect with people that are coming the same way as you! 

      Save planet and time with: FAKE-TAXI   
</p>
      <a href="login.php">Log IN</a>
      <a href="signup.php">Register</a>
    </div>
    <ul class="social">
      <li><a href="#"><img src="icons_photo/facebook.png"></a></li>
      <li><a href="#"><img src="icons_photo/twitter.png"></a></li>
      <li><a href="#"><img src="icons_photo/instagram.png"></a></li>
    </ul>
  </section>
  <div class="menu">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">News</a></li>
      <li><a href="#">Destination</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
  <script >
const menuToggle = document.querySelector('.toggle');
const showcase = document.querySelector('.showcase');

menuToggle.addEventListener('click', () => {
  menuToggle.classList.toggle('active');
  showcase.classList.toggle('active');
	  <script>
</body>
</html>
