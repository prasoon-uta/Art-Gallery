<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Assignment # 3</title>	


    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-inverse " role="navigation">
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
				
			</nav>
			<div class="jumbotron">
				<h1>
					Welcome to Assignment #3
				</h1>
				<p>
					This is the third Assignment for <B>Prasoon Kumar</B> for CSE 5335
					</p>
				
			</div>
			
				
			
		</div>
	</div>
	
	
<div style="margin-top:40px;text-align:center;" class="container-fluid">
	<div class="row">
		
		<div class="container-fluid">
		<div class="col-md-2">
			<h4>
			<span class="glyphicon glyphicon-info-sign"></span>
				About Us
			
			</h4>
			<p>
			What this is all about <br>
			and other stuffs
			

			</p>
			
			
			
			<a href="/project3/AboutUs.php" class="btn btn-default" role="button">
                    <span class="glyphicon glyphicon-link"></span> Visit Page
                </a>
			
			
			
		</div>
	
		
		<div class="col-md-2">
			<h4>
				<span class="glyphicon glyphicon-th-list"></span>
				Artist List
			</h4>
			<p>
			Displays a list of artist <br>
			name as links			
			</p>
			
		
			
			<a href="/project3/Part01_ArtistsDataList.php" class="btn btn-default" role="button">
                    <span class="glyphicon glyphicon-link"></span> Visit Page
                </a>
			
			
			
		</div>
		
		
		
		<div class="col-md-2">
			<h4>
			<span class="glyphicon glyphicon-user"></span>
				Single Artist
			</h4>
			<p>
			Displays information for a  <br>
			single artist	
			</p>
			
			
			<a href="/project3/Part02_SingleArtist.php?id=19" class="btn btn-default" role="button">
                    <span class="glyphicon glyphicon-link"></span> Visit Page
                </a>
			
			
			
			
		</div>
		
		
		<div class="col-md-2">
			<h4>
			<span class="glyphicon glyphicon-picture"></span>
				Single Work
			</h4>
			<p>
			Displays information for a  <br>
			single work
			</p>
			
				
			
			
			
			<a href="/project3/Part03_SingleWork.php?id=394" class="btn btn-default" role="button">
                    <span class="glyphicon glyphicon-link"></span> Visit Page
                </a>
			
			
			
		</div>
		
		<div class="col-md-2">
			<h4 >
			<span class="glyphicon glyphicon-search"></span>
				Search
			</h4>			
			<p>
			Perform search on   <br>
			Artworks tables
			</p>
			
				
			
			
			<a href="/project3/Part04_Search.php" class="btn btn-default" role="button">
                    <span class="glyphicon glyphicon-link"></span> Visit Page
                </a>

			
			
			
		</div>
		
		
		</div>
	</div>
</div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>