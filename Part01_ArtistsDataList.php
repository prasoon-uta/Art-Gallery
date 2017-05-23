<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Part01_ArtistsDataList</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

	
  </head>
  <body style="padding-top:65px;">
  
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				
				<div class="container-fluid">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#">Assign 3</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="/project3/default.php">Home</a>
						</li>
						<li>
							<a href="/project3/AboutUs.php">About Us</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="/project3/Part01_ArtistsDataList.php">Artists Data List (Part 1)</a>
								</li>
								<li>
								<a href="/project3/Part02_SingleArtist.php?id=19">Single Artist (Part 2)</a>
								</li>
								<li>
									<a href="/project3/Part03_SingleWork.php?id=394">Single Work (Part 3)</a>
								</li>
								
								<li>
									<a href="/project3/Part04_Search.php">Search (Part 4)</a>
								</li>
								
							</ul>
						</li>
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
					<form class="navbar-form navbar-left" action="/project3/Part04_Search.php" method="get" >
					<B style="color:gray">Prasoon Kumar</B>
						<input type="text" name = "key" id = "searchValue" class="form-control" placeholder="Search Paintings">
					
					<button  onClick = "window.location.href='/project3/Part04_Search.php'" class="btn btn-info" >
							Search
						</button>
						
						</form>
					
					</ul>
				</div>
				</div>
			</nav>
			</div>
			</div>
			</div>
			
			<div class="container">
			<h2>
			Artists Data List (Part 1)				
			</h2>
			<hr>
			</div>
			
			<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "artists";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,'utf8');

// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT  ArtistID,firstname, lastname,YearOfBirth,YearOfDeath FROM artists";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
		 
	?>	 
		
			<div class="row">
			<div class = "container">
			<a href="<?php echo "/project3/Part02_SingleArtist.php?id=".$row["ArtistID"]?>">
			<?php echo $row["firstname"]."  ".$row["lastname"]."  ( ".$row["YearOfBirth"]." - ".$row["YearOfDeath"]." )"; ?></a>
			</div>
			</div>
		
		 <?php
     }
} else {
    header('Location: /project3/error.php');  
}

$conn->close();
?>  

	

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>