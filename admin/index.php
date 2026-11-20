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
</style>
</head>


<body>
	<div class="wrapper">
		<header>

		<div class="logo">
			<img src="D:\64611d979983691c6e81da83fb7051d44.jpeg">
			<h1 style="color: white;">Vivekanand Education Society's Institute of Technology</h1>
		</div>

		<?php
		      if($_SESSION['login_user'] )
			  {
				?>
			  <nav>
			      <ul>
				      <li><a href="index.php">HOME</a></li>
				      <li><a href="admin_login.php">ADMIN-LOGIN</a></li>
				      <li><a href="logout.php">LOGOUT</a></li>
				      <li><a href="faculty_login.php">FACULTY-LOGIN</a></li>
				      <li><a href="feedback.php">FEEDBACK</a></li>
					  
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
					         <li><a href="admin_login.php">ADMIN-LOGIN</a></li>
					         <li><a href="student_login.php">STUDENT-LOGIN</a></li>
					         <li><a href="Faculty_login.php">FACULTY-LOGIN</a></li>
					         <li><a href="feedback.php">FEEDBACK</a></li>
							 <li><a href="books.php">BOOKS</a></li>
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
				Email: dept.library.portal@ves.ac.in <br>
				Mobile: +9182374***
			</p>
		</footer>
	</div>
</body>

</html>