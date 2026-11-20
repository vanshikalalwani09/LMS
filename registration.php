<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>User Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

  <style type="text/css">
   

 section
  {
    margin-top: 0px;
    height: 670px;
    width: 1535px;
    background-color: black;
    background-image: url("http://www.imperial.ac.uk/ImageCropToolT4/imageTool/uploaded-images/160108_library_laptops_025--tojpeg_1490024140232_x2.jpg");
    background-repeat: no-repeat;

 } 
 .box
 {
  height: 400px;
	width: 480px;
	background-color: black;
	margin: 0px auto;
	opacity: .8;
	color: white;
	padding: 20px;
  padding-top: 150px;
 }
 label
 {
  font-weight: 600;
  font-size: 18px;


 }
 </style>
 </head>


<section><br><br><br><br><br>
 <div class="box">
 <form  name="signup" action="" method="post">
        <b><p style="padding-left: 10px;font-size: 20px; font-weight: 600;">Sign-up as:</p></b>
        <input style="margin-Left: 80px; Width: 18px;" type= "radio" name="user" id="admin" value="admin">
        <label for="admin">Admin</label>
        <input style="margin-Left: 35px; Width: 18px;" type="radio" name="user"  id="student" value="student" checked="">
        <label for="student">Student</label>&nbsp&nbsp&nbsp&nbsp
        <input style="margin-Left: 20px; Width: 18px;" type= "radio" name="user" id="faculty" value="faculty" checked="">
        <label for="faculty">Faculty</label>
        <button class="btn btn-default" type="submit" name="submit1" style="color: black; font-weight: 700; width: 70px;height: 30px;">Ok</button>
</form>
</div>
<?php
  if(isset($_POST['submit1']))
  {

  if($_POST['user']=='admin')
  {

    ?>
    <script type="text/javascript">
      window.location="admin/registration.php"
    </script>
    <?php
  }
  else if($_POST['user']=='faculty')
  {
    ?>
    <script type="text/javascript">
      window.location="faculty/registration.php"
    </script>
<?php
   }
  else
  {

    ?>
          <script type="text/javascript">
            window.location="student/registration.php"
          </script>
<?php
  }

  }
  ?>
</section>
</body>
</html>