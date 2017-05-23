<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Part02_SingleArtist</title>

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
							<a href="/project3/Default.php">Home</a>
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
				
				
			<?php
			
			   
if(!isset($_GET['id']))
{
header('Location: /project3/error.php');  
}
else if(isset($_GET['id']) && $_GET['id']=="")
{
header('Location: /project3/error.php');  
}				

else 
{	
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "artists";
$firtname="";
$lastname="";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,'utf8');

// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT  ArtistLink,Nationality,Details,ArtistID,firstname, lastname,YearOfBirth,YearOfDeath FROM artists where ArtistID=".$_GET['id'];
$result = $conn->query($sql);


$sql1 = "SELECT  ArtWorkID,ImageFileName,Title,YearOfWork FROM artworks where ArtistID=".$_GET['id'];
$result1 = $conn->query($sql1);

}
?>


<?php


if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
		
		$firtname=$row["firstname"];
	?>	 
		<div class ="row"> 
			
				
					<div class="col-md-3">
		<h3><?php  echo $row["firstname"]." ".$row["lastname"]  ?></h3>
			</div>
			</div>
			
				
				
				<div class ="row"> 
			
				
					<div class="col-md-3">
					
					<img src="/project3/images/art/artists/medium/<?php echo $_GET['id']?>.jpg" class="img-thumbnail" width="300" height = "300">
					
					
				</div>
				
					<div class ="col-md-6">
				<div class="container-fluid">
						<div>
						
						
						<?php	echo iconv('UTF-8', 'utf-8//IGNORE', utf8_encode ($row["Details"] ))?>
					
						
						</div>

						
						
						
					<div style="margin-top:10px" >
					<p>
					<button type="button" class="btn btn-default" >
					<a href="#"><span class="glyphicon glyphicon-heart"></span>
					Add to Favourites List</a></button>
					</p></div>
						
						
						
						
						<!-- testing -->
						<div style="margin-top:30px" class="panel panel-default">
                                <div class="panel-heading  boldText leftPadEightPix"><B>Artist Details</B></div>
                                
                                <!-- Table -->
                                <table class="table">
								
                                    <!--Date-->
									
                                    <tr class="col-md-14">
									
                                        <td class="col-md-4"><B>Date:</B></td>
                                        <td ><?php echo $row["YearOfBirth"]." - ".$row["YearOfDeath"]  ?></td>
                                    </tr>
									
                                    <!--Nationality-->
                                    <tr class="col-md-14">
                                        <td class="col-md-4"><B>Nationality:</B></td>
                                        <td ><?php echo $row["Nationality"]?></td>
                                    </tr>

                                    <!--Wikipedia Link-->
                                    <tr class="col-md-14">
                                        <td class="col-md-4"><B>More Info:</B></td>
                                        <td ><a href="<?php echo $row["ArtistLink"] ?>"><?php echo $row["ArtistLink"] ?> </a></td>
                                    </tr>
									
                                </table>
                                
                            <!--End of panel panel-default-->
                            </div>
						
						<!--ends -->
					<div>
				
				</div>
				</div>
			</div>

		
<div class="clearfix"></div>


			<div style="margin-top:5px;margin-bottom:5px;" class="col-lg-12">
                
                    
                        <h4 style="margin-left:1px;">Art by <?php echo $row["firstname"]." ".$row["lastname"] ?></h4>
                  
                
            </div>
		
			
		 <?php
     }
} else {
     echo "0 results";
}
?>

<!--ArtWork list coding starts from here-->
<div class = "row">
<div class="container-fluid">
	
<?php

if ($result1->num_rows > 0) {
     // output data of each row
     while($row = $result1->fetch_assoc()) {
		
	?>	
	
	
							
							<div class = "col-sm-3 ">
							<div class = "container-fluid panel panel-default">
                            <!--ArtWork image-->
                            <div style = "text-align:center;" >
							
							<div style="margin-top:5px;margin-bottom:5px">
                             <a href="/project3/Part03_SingleWork.php?id=<?php echo $row["ArtWorkID"] ?>">   <img  src="/project3/images/art/works/square-medium/<?php echo $row["ImageFileName"]?>.jpg" class="img-thumbnail " />
                            </a>
							</div>
                            
                            <!--ArtWork title-->
							<div style = "text-align:center;width:100%;height:60px">
                            <a style ="font-size:90%;" href="/project3/Part03_SingleWork.php?id=<?php echo $row["ArtWorkID"] ?>">
							<?php echo $row["Title"].", ".$row["YearOfWork"]?>
							</a>
							</div>
                            
							
                            <!--ArtWork buttons-->
							<div style="margin-bottom:5px;">
                            <a href="/project3/Part03_SingleWork.php?id=<?php echo $row["ArtWorkID"] ?>" class="btn btn-primary btn-xs">
                                <span class="glyphicon glyphicon-info-sign"></span> View
                            </a>
							
							
                            <!--Wish link-->
							
                            <a href="#"class="btn btn-success btn-xs">
                                <span class="glyphicon glyphicon-gift"></span> Wish
                            </a>
							
							
							
                            <!--Wish link-->
							
                            <a href="#"class="btn btn-info btn-xs">
                                <span class="glyphicon glyphicon-shopping-cart"></span> Cart
                            </a>
							</div>
							
                        <!--End of thumbnail-->
                        
						</div>
						</div>
						</div>
						
						
            


 <?php
     }
} else {
     header('Location: /project3/error.php');  
}
?>
</div>
</div>

<?php
$conn->close();
?>  
				
			
			
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>