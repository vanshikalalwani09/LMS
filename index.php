<?php
  
  include "connection.php";
  session_start();
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Vivekanand Education Society's Institute of Technology
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
	nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	}
	.wrapper
{
	height: 660px;
	width: 1500px;
	/*background-color: red;*/
}
header
{
	height: 126px;
	width: 1500px;
	background-color: black;
	padding: 10px;
}
section
{
	height: 546px;
    width: 1520px;
	background-color: grey;
}
footer
{
	height: 80px;
	width: 1520px;
	background-color: black;
}
</style>
</head>


<body>
	<div class="wrapper">
		<header>

		<div class="logo">
			<img src="https://images.static-collegedunia.com/public/college_data/images/logos/1479369449logo.jpg?tr=w-80,h-80,c-force">
			<h1 style="color: white;">Vivekanand Education Society's Institute of Technology</h1>
		</div>

		<?php
		      if($_SESSION['login_user'] )
			  {
				?>
			  <nav>
			      <ul>
				      <li><a href="index.php">HOME</a></li>
					  <li><a href="books.php">BOOKS</a></li>
					  <li><a href="feedback.php">FEEDBACK</a></li>
				      <li><a href="logout.php">LOGOUT</a></li>
				    
				      
					  
			     </ul>
		     </nav>
	    <?php
		
			  }
			  else
			  {
				    ?>
				      <nav>
				          <ul>
				 	         <li><a href="index.php">HOME</a></li>
							  <li><a href="books.php">BOOKS</a></li>
					         <li><a href="login.php">LOGIN</a></li>
							 <li><a href="registration.php">SIGN-UP</a></li>
							 
				         </ul>
			         </nav>
                     

        <?php

			  }
			  ?>
			
		</header>
		<section>
		<div class="images/emil-widlund-xrbbXIXAWY0-unsplash.jpg">
			<br><br><br>
			<div class="box">
				<br><br><br><br>
				<h1 style="text-align: center; font-size: 35px;">Welcome to library</h1><br><br>
				<h1 style="text-align: center;font-size: 25px;">Computer Engineering </h1><br>
				<h1 style="text-align: center;font-size: 25px;">Department </h1><br>
			</div>
		</div>
		</section>
		<footer>
			<p style="color:white;  text-align: center; ">
				<br><br>
				Email: library.portal111@gamil.com<br>
				Mobile: +9182374***
			</p>
		</footer>
	</div>
</body>

</html>