<?php
// Database connection 
$connection = new mysqli("localhost","root","", "cs499") 
or die("Not connected". mysql_connect_error());



//if(isset($_POST['submit']))
if(isset($_POST['submit'])) // When user submit the request.
{ 
	

	$userID = $_POST['test'];

	//$sqlCheck = " SELECT * FROM user where UID = '$userID'";

	// Display an message if product is not found!
	

// Sql Multi Query 

	$sql = " SELECT u.UID, u.Name, ma.city, pl.date_added, pl.id, sr.phone_number 
	FROM user u 
	LEFT JOIN mail_address ma ON u.UID = ma.user_id 
	LEFT JOIN phone_list pl ON u.UID = pl.user_id 
	LEFT JOIN subscriber sr ON pl.phone_number = sr.phone_number 
	WHERE u.UID = '$userID'"; 

 	 $result = $connection->query($sql);

 		if($result->num_rows <= 0) 
 		{
 		//$url= 'search.php';
		//header("Location: $url");
 		echo "<script> alert('User ID is not FOUND!'); </script>";
		echo("USER ID IS NOT FOUND IN THE DATABASE... ");
    	}
    	else 
    	{ 

while ($tryResult = mysqli_fetch_assoc($result)) :
?>



<!DOCTYPE html>
<html>
<head>
	<title> Hello</title>
</head>
<body style="background-color: green;">

	<!-- remove space and center the products -->
<div class="col-md-2"   class="text-center" ></div>

	<!-- Adding products -->
	<div >
		<div class="row" >
			<tr>
			<th><h2 class="text-center"> Product details </h2></th>
			</tr>
			<div>
				<tr>
				<td> <p> Name: <?=  $tryResult['Name']?> </p></td>
				<td></td><p> ID:<?=$tryResult['id'] ?> </p> </td>
				<p class="price "> Date Added: <?=$tryResult['date_added']; ?> </p>
				<button type="button" class="btn btn-success" data-toggle="modal" data-target = "#details-1"> More Details </button>
		</tr></div>
</div>

<br/><br/>

<footer class="text-center" id="footer" > &copy; BudGunShops </footer>

</div>

</body>
</html>




<?php
	
	endwhile;
}

}	

?>