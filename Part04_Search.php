<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<title>Part04_Search</title>


    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body style="padding-top:65px;" onload="myFunction()">
  
<!--Header start-->
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
					
					<button  onClick = "window.location.href='/project3/Part04_Search.php'" class="btn btn-info">
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
	<!--Header End-->		
			
			<br />
			<div class="topSpacing"></div>
			
	<!-- Extra spacing End -->

	<div class="container">
		 
		<h2> Search Results</h2><hr></div>
		
	<!-- Form start -->
		 <div class = "container">
		 <div class = "well">
  <form action="/project3/Part04_Search.php" method="get" >
    <div class="form-group row">

	
	 <div style="margin-bottom:6px;">   <input class="form-check-input" type="radio" name="criteria" id="radioTitle" value="fbt" onClick = "hideDescTextBox();">
            Filter By Title
          </div>
	
		<div id ="fbttext" style="margin-bottom:6px;">
        <input   type="text" class="form-control" id="texttitle" name = "key" >
		</div>
      <div style="margin-bottom:6px;">   <input class="form-check-input" type="radio" name="criteria" id="radioDesc" value="fbd" onClick = "hideTitleTextBox();" >
            Filter By Description
          </div>
		  
		  <div id ="fbdtext" style="margin-bottom:6px;">
		  <input  type="text" class="form-control" id="textdesc" name = "key" >
			</div>
		  
			
		   <div style="margin-bottom:9px;">   <input class="form-check-input" type="radio" name="criteria" id="radioNoFilter" value="nf" onClick = "hideBoth();"  >
            No Filter (Show all Art Works)
          </div>
  
        
		  
            
    <div >
        <button type="submit" class="btn btn-primary">Filter</button>
     </div> 
    </div>
	</div>
	
  </form>
</div>
	
	<!-- Form end -->
		 
	<!-- search logic starts -->	 
	<!--php db connection-->	 
		 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "artists";
$firtname="";
$lastname="";
$key="";
$criteria="";
$result="";


if(isset($_GET['key'])){

	$key=$_GET['key'];
}
if(isset($_GET['criteria'])){

	$criteria=$_GET['criteria'];
}


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,'utf8');

// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
if($key!="" && $criteria == "fbt" 	)
{
	
$sql = "SELECT  ArtWorkID,Description,ImageFileName,Title FROM artworks where Title like '%{$key}%'";
$result = $conn->query($sql);
}
else if($key!="" && $criteria == "fbd" )
{
	
$sql = "SELECT  ArtWorkID,Description,ImageFileName,Title FROM artworks where Description like '%{$key}%'";   
$result = $conn->query($sql);
}
else if($criteria == "nf")
{
	
$sql = "SELECT  ArtWorkID,Description,ImageFileName,Title FROM artworks";
$result = $conn->query($sql);
}
else if($key!="")
{
	
$sql = "SELECT  ArtWorkID,Description,ImageFileName,Title FROM artworks where Title like '%{$key}%'";
$result = $conn->query($sql);
}

if (null!=$result &&  $result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {


	// echo($row["Title"]);
	 
?>
<div class="container">
<div class ="row"> 
	
				
					<div class="col-md-2">
					
				<a href="/project3/Part03_SingleWork.php?id=<?php echo($row["ArtWorkID"])?>">	<img src="/project3/images/art/works/square-medium/<?php echo $row["ImageFileName"]?>.jpg" class="img-thumbnail" width="200" height = "200">
				</a>	
					
				</div>
				
					<div class ="col-md-6">
						
						<p><a href="/project3/Part03_SingleWork.php?id=<?php echo($row["ArtWorkID"])?>"><?php echo($row["Title"])?></a></p>
						
						<?php 
							
							if($criteria == "fbd" && $row["Description"]!="")
							{
								$desc = $row["Description"];
								$descDisplay=str_ireplace($key, '<span style="background-color: #FFFF00;">'.$key.'</span>', $desc);
							
						?>	
						
						<p>
						
						
						<?php	echo iconv('UTF-8', 'utf-8//IGNORE', utf8_encode($descDisplay))?>
					
						
						</p>
						<?php
							}else {?>
					
						
						<?php	echo iconv('UTF-8', 'utf-8//IGNORE', utf8_encode($row["Description"]))?>
					
							<?php }?>
						
						</div>
						

						
</div>
<hr>
</div>

	<?php	
		
}} else
{
	?>	
			
			
			
<?php } ?>
			
<script>				
	function hideTitleTextBox()
	{
	
		document.getElementById("textdesc").disabled = false;
		
	
		var elem = document.getElementById('fbttext');
		elem.style.display = 'none';
		
		var elem1 = document.getElementById('fbdtext');
		
		elem1.style.display = 'block';
				
		document.getElementById("texttitle").disabled = true;
		
		
		
		
		
	}	
	function hideDescTextBox()
	{
		
		
		document.getElementById("texttitle").disabled = false;
		
		var elem1 = document.getElementById('fbttext');
		elem1.style.display = 'block';
		var elem = document.getElementById('fbdtext');
		
		elem.style.display = 'none';
		
		
		document.getElementById("textdesc").disabled = true;

		
	}	
	
	function hideBoth()
	
	{
		document.getElementById("texttitle").disabled = true;
		document.getElementById("textdesc").disabled = true;
		var elem = document.getElementById('fbttext');
		var elem1 = document.getElementById('fbdtext');
		elem.style.display = 'none';
		elem1.style.display = 'none';
		
	}
	
	function myFunction()
	{
		
		var elem = document.getElementById('fbttext');
		var elem1 = document.getElementById('fbdtext');
		elem.style.display = 'none';
		elem1.style.display = 'none';
	
		var key = '<?php echo $key ;?>';
		var criteria = '<?php echo $criteria ;?>';
		
		
		if(criteria === "fbt" && key!=="")
		{
			var radioTitle =  document.getElementById("radioTitle");
			radioTitle.checked=true;
			
			if(radioTitle.checked)
			{
			
				hideDescTextBox();				
				document.getElementById('texttitle').value=key;
				
			}
		}
		
		else if(criteria === "fbd" && key!=="")
		{
			var radioDesc =  document.getElementById("radioDesc");
			radioDesc.checked=true;
			
			if(radioDesc.checked)
			{
			
				hideTitleTextBox();
				
				document.getElementById('textdesc').value=key;
				
			}
		}
		
		else if(criteria === "nf" && key === "")
		{
			var radioDesc =  document.getElementById("radioNoFilter");
			radioDesc.checked=true;
			
			if(radioDesc.checked)
			{
			
				hideBoth();
				
			}
		}
		else if(criteria === "" && key !== "")
		{
			var radioDesc =  document.getElementById("radioTitle");
			radioDesc.checked=true;
			
			if(radioDesc.checked)
			{
			
				hideDescTextBox();
				document.getElementById('texttitle').value=key;
				
			}
		}
		
		
	}
		
		
</script>

		
		 
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
	 <script src="js/mark.js"></script>
	
  </body>
</html>