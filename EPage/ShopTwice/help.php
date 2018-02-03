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
  
 	echo "<style>";
 		echo "th, td {
    		padding: 5px;
    		border: 1px solid black;
    		border-collapse: collapse;
    		text-align: left; }";
 	echo "</style>";	

	echo "<table >";
	echo "<tr>";
	echo "<th>  USER ID  </th>";
	echo "<th>  Name </th>";
	echo " <th> City </th>";
	echo " <th> Phone Number</th>";
	echo " <th> Date Added </th>";
	echo " <th> ID </th>";

while ($tryResult = mysqli_fetch_assoc($result)) :
		
		echo "</tr>";
			echo 	"<tr>";
			echo 	" <td>";echo $tryResult['UID']; 			echo "<br>";echo " </td>";
			echo 	" <td>";echo $tryResult['Name']; 			echo "<br>";echo " </td>";
			echo 	" <td>";echo $tryResult['city']; 			echo "<br>";echo " </td>";
			echo 	" <td>";echo $tryResult['phone_number']; 	echo "<br>";echo " </td>";
			echo 	" <td>";echo $tryResult['date_added']; 	    echo "<br>";echo " </td>";
			echo 	" <td>";echo $tryResult['id']; 			    echo "<br>";echo " </td>";
			echo 	"</tr>";
		echo "</table>";
	

	endwhile;
}

}	



/*$sql = "
	SELECT u.UID, u.Name,ma.city,pl.date_added, pl.id, sr.phone_number 
	FROM user u, mail_address ma, phone_list pl,subscriber sr
	WHERE u.UID = ma.user_id AND 
	 u.UID = pl.user_id  and
	 pl.phone_number = sr.phone_number AND 
	 UID = '$userID'
	"; */
	
/* 
 		SELECT  Name, Email,carrier, date_added, street
 		FROM user u
 		JOIN mail_address ma ON u.id = ma.id 
 		JOIN phone_list  phl ON  ma.id = phl.user_id
 		JOIN printer_list s ON phl.phone_number = s.phone_number

 		*/

/* 
select u.Name,ma.city,pl.date_added , sr.phone_number From user u join mail_address ma on u.UID = ma.user_id join phone_list pl on ma.user_id = pl.user_id join subscriber sr on pl.phone_number = sr.phone_number 
*/


	
?>
