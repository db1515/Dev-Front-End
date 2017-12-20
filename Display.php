<!DOCTYPE html>
<html>
<head>  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>FDA User-Welcome Page</title>      
	  <link rel="stylesheet" type="text/css" href="reset.css">  	  
</head>
<body>
	<header>        
        <h1>FDA Total Recall<span class="color">.</span></h1>
        <nav>
            <ul>
				<li><a href="index2.html">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="ContactUs.html">Contact</a></li>				
				<div class="dropdown">
					<li><a href= "/">User-Profile</a></li> 
					<button class="dropbtn">
						<i class="fa fa-caret-down"></i>
					</button></li>
					<div class="dropdown-content">
						<a href="#">User-Info</a>
						<a href="#">Product-Saved-List</a>
						<a href="logout.php">Logout</a>
					</div>
				</div>
			</ul>
        </nav>		
    </header>	
	
	<div class="tab">
		<button class="tablinks" onclick="openCity(event, 'Food-Recall')" id="defaultOpen"> <b>Food-Recall</b></button>
		<button class="tablinks" onclick="openCity(event, 'Drug-Recall')">Drug-Recall</button>
		<button class="tablinks" onclick="openCity(event, 'Medical-Device-Recall')">Medical-Device-Recall</button>
	</div>
        <div class="tab">
             <button class="tablinks" onclick="openCity(event, 'Searching Product-Food Recall')" id="defaultOpen"> <b>Search Product In Food-Recall</b></button>
        </div>
	
	<div id="Food-Recall" class="tabcontent">
		<span onclick="this.parentElement.style.display='none'" class="topright">x</span>
                <h3>Food-Recall</h3>
                <?php
                  include('food-recall.php');
	        ?>

	</div>

	<div id="Drug-Recall" class="tabcontent">
		<span onclick="this.parentElement.style.display='none'" class="topright">x</span>
		<h3>Drug-Recall</h3>
		<?php
		   include('drug-recall.php');
		?> 
	</div>

	<div id="Medical-Device-Recall" class="tabcontent">
		<span onclick="this.parentElement.style.display='none'" class="topright">x</span>
		<h3>Medical-Device Recall</h3>
                <?php session_start(); ?>
                <?php
		   include('device-recall.php');
		?>	
	</div>
        
        <div id="Searching Product-Food Recall" class="tabcontent">
              <span onclick="this.parentElement.style.display='none'" class="topright">x</span>
              <h3>Search Product in Food-Recall</h3>
             <br><form method="GET"><input type="text" id="search" name="query" placeholder="Search Product In Food-Recall" title="Search Product in Food-Recall"></form><br>
              <br><input type="submit" id="submit" value="Search Product" onclick="location.href='foodApi.php'"><br>
              <?php echo $product = $_GET['query']; ?> 	
        </div>
	<footer>
        <div id="footer-info">
            <p>Copyright 2017 FDA Total Recall All rights reserved.</p>
            <p><a href="#">Terms of Service</a> I <a href="#">Privacy</a></p>
        </div>
        <div id="footer-links">
				<ul>
					<li><h5>FDA</h5></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Meet The Team</a></li>
					<li><a href="#">What We Do</a></li>					
				</ul>				
			<div class="clear"></div>
		</div>
    </footer>
	<script src="index.js"></script>
</body>
</html>
