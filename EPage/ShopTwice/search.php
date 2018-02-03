
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- Add internal CSS -->
  <style type="text/css">
  	.colorAmaze{
  		background-color:green;
  		padding-bottom: 20px;
  		padding-top: 20px;
  	}

  </style>


</head>

<body style="background-color: #F5F5DC; color: red;" >

	<nav  class="navbar navbar-default">

  <div  class="container-fluid">
    <div class="navbar-header">
     <a>  <img class="navbar-brand"  src="" alt="logo"  class="imageField" width="80" height="80">  </a>

    </div>
    <ul  class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Email us</a></li>
      <li><a href="#">Order Status/Account</a></li>
      <li><a href="#">Customer Help</a></li>
    </ul>
  </div>
</nav>

	<!-- -->

	<div class=" form-group container-fluid text-center colorAmaze" >
	<h3> Search Record </h3>
	
		<form method="post" action="help.php">
		<fieldset>
			
 	
		<input type="number" name="test" placeholder="User ID" required><br><br>
		<button type="submit" name="submit" class="btn btn-primary "> SUBMIT</button> 
		</fieldset>
	</form>

</div>
</div>
</body>
</html>