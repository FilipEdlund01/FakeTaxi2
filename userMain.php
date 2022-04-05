<!--Splitting the header and footer into separate documents makes things easier!-->
<?php
  include_once 'header.php';
?>

<section class="index-intro">

</section>
<body onload="initialize1()" class="indexBackground">

			<div class="p-5">
				<h2 class="text-uppercase text-center" style="color: black;">Ride history:</h2>
			</div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-lg-8" id="usermainDiv">
					</div>
					
				</div>
			</div>
			<div class="form-group">
			</div>
</body>

    <table>

<tr>
    <th>ID</th>
    <th>name</th>
    <th>user_email</th>

</tr>
<?php
$conn = mysqli_connect("localhost","root","","taxidb");
$sql = "SELECT * FROM users";
$result =$conn->query($sql);
if($result->num_rows >0){
while($row = $result-> fetch_assoc()){
    echo "<tr><td>" .$row["usersId"]. "</td><td>" .$row["usersName"]. "</td><td>" .$row["usersEmail"]. "</td></tr>";

}
}else{
echo "no Results";

}
$conn-> close();

?>


</table>

</body>
<script src="js/script.js"></script>


<?php
  include_once 'footer.php';
?>
