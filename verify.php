<?php
include "navbar.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>verify email address</title>
       <style type= "text/css">
        .box1
{
	height: 500px;
	width: 350px;
	background-color: white;
	margin: 0px auto;
	opacity: .8;
	color: white;
	padding-top: 200px;
}</style>
</head>
<body style="background-color: #00695c">
<div class= "box1">
    <h2>Enter the OTP:  </h2>
    <form method= "post">
<input style="width: 300px; height:50px;" type= "text" name="otp" class= "form-control" required= "" placeholder= "enter the OTP here..."><br>
<button class= "btn btn-default" type="submit " name="submit_v" style="font-weight:700;"> Verify</button>
    </form>
</div>
<?php 
$ver1= 0; 
if(isset($_POST['submit_v']))
{
   $ver2= mysqli_query($db,"SELECT * FROM verify;");
   while($row=mysqli_fetch_assoc($ver2))
{
    if($_POST['otp']==$row['otp'])
    {
 mysqli_query($db,"UPDATE student set status ='1' where username='$row[username]';");
 $ver1= $ver1+1;   
}
}
if ($ver1==1)
{
    header("location: login.php");
}
else
{
    ?>
    <script type="text/javascript">
      alert("Wrong OTP given.Try again");
    </script>
  <?php
}
}
?>
<body>
</body>
</html>
  