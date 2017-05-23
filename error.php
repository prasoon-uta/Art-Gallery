<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<title>Error Page</title>

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
							<a href="/Project3/default.php">Home</a>
						</li>
						<li>
							<a href="/Project3/AboutUs.php">About Us</a>
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
			
			
			<div style="text-align:center;" class="container">
				
				
			

	 
		<h1  >Oooops!! Something went wrong!</h1>
				
				<div class ="row"> 
			
				
					
					<img src="/project3/images/error.jpg"  width="300" height = "300">
					
				</div>	
					
				<h2  >Try that again and if still it doesn't work,let us know</h2>
					
					</br>
					<a href="/project3/default.php" class="btn btn-default">Go to Home Page</a>
					<span> <a href="/project3/Part01_ArtistsDataList.php" class="btn btn-default">Go to All Artist lists</a></span>
					<span> <a href="/project3/Part04_Search.php" class="btn btn-default">Go to Search page</a></span>
					

				
			</div>
			
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>