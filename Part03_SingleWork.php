<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Part03_SingleWork</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

	<style>
.modal-wide .modal-dialog {
  width: 25%; /* or whatever you wish */
}
	</style>
	
  </head>
  <body style="padding-top:90px;">
  
  
  
  
  
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
						<input type="text" name = "key" id = "key" class="form-control" placeholder="Search Paintings">
					
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

$sql = "SELECT  YearOfWork,Medium,Width,Height,OriginalHome,Cost,Description,ArtistID,ArtWorkID,ImageFileName,Title,YearOfWork FROM artworks where ArtWorkID=".$_GET['id'];
$result = $conn->query($sql);


$sql1 = "SELECT  DateCompleted as DateCompleted FROM orders a,orderdetails b where a.OrderID = b.OrderID and b.ArtWorkID=".$_GET['id'];
$result1 = $conn->query($sql1);

$sql2 = "SELECT  GenreName as GenreName FROM genres a,artworkgenres b where a.GenreID = b.GenreID and b.ArtWorkID=".$_GET['id'];
$result2 = $conn->query($sql2);

$sql3 = "SELECT  SubjectName as SubjectName FROM subjects a,artworksubjects b where a.SubjectID = b.SubjectID and b.ArtWorkID=".$_GET['id'];
$result3 = $conn->query($sql3);

$sql4 = "SELECT  a.ArtistID as ArtistID ,FirstName as FirstName,LastName as LastName FROM artists a,artworks b where a.ArtistID = b.ArtistID and b.ArtWorkID=".$_GET['id'];
$result4 = $conn->query($sql4);
}
?>


<?php


if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
		
	?>	 
		
			
				
				
				<div class ="row"> 
				
				<div class="col-md-3">
				<h4><?php echo($row["Title"])?></h4>
				<B>By:</B>
				<?php
				
				if ($result4->num_rows > 0) {
				 // output data of each row
				 while($row1 = $result4->fetch_assoc()) {
					 $firstname=$row1["FirstName"];
					 $lastname=$row1["LastName"]
				?>		 
						<a href = "<?php echo "/project3/Part02_SingleArtist.php?id=".$row1["ArtistID"]?>">
					
						<?php echo($row1["FirstName"]) ?> <?php echo($row1["LastName"]) ?> </a>
								
				<?php 
				}}
				?>
				
				</div>
				</div>
				
				
				
				<div class ="row" style="margin-top: 5px;"> 
			
				
					<div class="col-md-3">
					 <a data-toggle="modal" href="#myModal">

					<img src="/project3/images/art/works/medium/<?php echo $row["ImageFileName"]?>.jpg" class="img-thumbnail" width="300" height = "300">
					
					</a>
					
				</div>
				
				 <!-- Modal for enlarged ArtWork image link -->
                          <div class="modal fade modal-wide" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h5 class="modal-title"><?php echo $row["Title"]."(".$row["YearOfWork"].") By ".$firstname ." ".$lastname ?></h5>
                                    </div>
                                
                                    <div style ="overflow:hidden;"class="modal-body">
                                        <img style="height: 100%; width: 100%; object-fit: contain" src="/project3/images/art/works/medium/<?php echo $row["ImageFileName"]?>.jpg" alt="sd" class="modalPic"/>
                                    </div>
                                
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div><!-- /.modal-content -->
                             </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->

				
				
				
				
				
				
					<div class ="col-md-6">
					<div class="container-fluid">
						</div>
						<div>
						
						
						<?php	echo iconv('UTF-8', 'utf-8//IGNORE', utf8_encode($row["Description"]))?>
					
						</div>

					<div>
					<h4 style="color:red;">$<?php echo substr($row["Cost"],0,-2);?></h4>
					</div>	
						
 <div class="btn-group">
                                 <!--Wish List link-->
								<button type="submit" class="btn btn-default" style="color:#1E90FF">
                                    <span class="glyphicon glyphicon-gift blueLinks"></span> Add to Wish List
                                </button>
								
								<button type="submit" class="btn btn-default" style="color:#1E90FF">
                                    <span class="glyphicon glyphicon-shopping-cart blueLinks"></span> Add to Shopping Cart
                                </button>

                            </div>
						
					
						
						
						<div style="margin-top:30px" class="panel panel-default">
                                <div class="panel-heading  boldText leftPadEightPix">Product Details</div>
                                
                                <!-- Table -->
                                <table class="table">
								
                                    <!--Date-->
									
                                    <tr class="col-md-14">
									
                                        <td class="col-md-4"><B>Date:</B></td>
                                        <td ><?php echo($row["YearOfWork"]) ?></td>
                                    </tr>
									
                                    <!--Nationality-->
                                    <tr class="col-md-14">
                                        <td class="col-md-4"><B>Medium:</B></td>
                                        <td ><?php echo($row["Medium"]) ?></td>
                                    </tr>

                                    <!--Wikipedia Link-->
                                    <tr class="col-md-14">
                                        <td class="col-md-4"><B>Dimensions:</B></td>
                                        <td ><?php echo $row["Width"]."cm" ?> X <?php echo $row["Height"]."cm" ?> </td>
                                    </tr>
									
									<tr class="col-md-14">
                                        <td class="col-md-4"><B>Home:</B></td>
										
										<td><?php	echo iconv('UTF-8', 'utf-8//IGNORE', utf8_encode($row["OriginalHome"]))?></td>
										
                                        
                                    </tr>
									
									<tr class="col-md-14">
                                        <td class="col-md-4"><B>Genres:</B></td>
                                        <td >
										
										<?php


										if ($result2->num_rows > 0) {
											 // output data of each row
											 while($row = $result2->fetch_assoc()) {
												?>
												<div style="margin-top: 1px;" >
												<a href="#"><?php echo($row["GenreName"])?></a>
												</div>
									
											<?php	
										}}
											?>	
										
									
										</td>
                                    </tr>
									
									<tr class="col-md-14">
                                        <td class="col-md-4"><B>Subjects:</B></td>
                                        <td >
										<?php


										if ($result3->num_rows > 0) {
											 // output data of each row
											 while($row = $result3->fetch_assoc()) {
												?>
												<div style="margin-top: 1px;" >
												<a href="#"><?php echo($row["SubjectName"])?></a>
												</div>
									
											<?php	
										}}
											?>	
										
										
										
										
										</td>
                                    </tr>
									
                                </table>
                                
                            <!--End of panel panel-default-->
                            </div>
						
						</div>
						
						
						<div class ="col-md-2">
						<div class="container-fluid">
						<div class="panel panel-info">
                                <div class="panel-heading noMargins boldText leftPadEightPix">Sales</div>
                                
                                <!-- Table -->
                                <table class="table">
                                    <!--Date-->
									
									<?php


									if ($result1->num_rows > 0) {
										 // output data of each row
										 while($row = $result1->fetch_assoc()) {
											
										?>	 		
                                    <div style="margin-top: 10px;" class="container-fluid">
									<a href="#"><?php echo(substr($row["DateCompleted"],0,10))?></a>
									</div>
									
									
									<?php }}?>

                                </table>
                                
                            <!--End of panel panel-default-->
                            </div>
                      
						</div>
						</div>

		 <?php
     }
} else {
      header('Location: /project3/error.php');  
}
?>


<?php
$conn->close();
?>  
				
			
			
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>